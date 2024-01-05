<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Produit\StoreProduitRequest;
use App\Http\Requests\Produit\UpdateProduitRequest;
use App\Models\Categorie;
use App\Models\CouleurProduit;
use App\Models\ImageProduit;
use App\Models\Produits;
use App\Models\SousCategorie;
use App\Models\TailleProduit;
use Intervention\Image\Facades\Image as Image;
use Exception;
use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Commande;
use App\Models\ProduitCommande;
use App\Models\Couleur;
use App\Models\Taille;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::all();
        $sous_categorie = SousCategorie::all();
        $produit = Produits::all();
        $information = Information::all();
        $couleurs = Couleur::all();
        $tailles = Taille::all();
        return view('admin.produit.index', compact('categorie', 'sous_categorie', 'produit', 'information','couleurs', 'tailles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        $sous_categorie = SousCategorie::all();
        $produit = Produits::all();
        $couleurs = Couleur::all();
        $tailles = Taille::all();
        return view('admin.produit.create', compact('categorie', 'sous_categorie', 'produit','couleurs', 'tailles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lib' => 'required',
            'ref' => 'sometimes',
            'status' => 'sometimes',
            'small_desc' => 'sometimes',
            'desc' => 'sometimes',
            'prix' => 'sometimes',
            'prix_promo' => 'sometimes', 
            'qte' => 'sometimes',
            'categorie_id' => 'nullable|sometimes',
            'sous_categorie_id' => 'nullable|sometimes',
            'sale' => 'sometimes',
            'bestseller' => 'sometimes',
            'couleurProduit' => 'sometimes',
            'tailleProduit' => 'sometimes',
        ]);
        $produit = new Produits();
        $produit->lib = $request->lib;
        $produit->ref = $request->ref;
        $produit->status = $request->status;
        $produit->small_desc = $request->small_desc;
        $produit->desc = $request->desc;
        $produit->prix = $request->prix;
        $produit->prix_promo = $request->prix_promo;
        $produit->qte = $request->qte;
        $produit->sale = $request->sale;
        $produit->bestseller = $request->bestseller;
        $produit->categorie_id = $request->categorie_id;
        $produit->sous_categorie_id = $request->sous_categorie_id;
        $produit->save();
        
        if ($request->hasFile('img')) {
         
            $uploadPath = 'img_produits/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            foreach($request->file('img') as $key=>  $prodImg){
                
                $extention = $prodImg->getClientOriginalName();
                $fileName = time().'.'.$extention;
                $prodImg->move($uploadPath , $fileName);
                $finalImagePathName = $uploadPath .'' . $fileName;
                $produitImage = new ImageProduit();
                $produitImage->produit_id = $produit->id;
                $produitImage->img = $finalImagePathName;
                $produitImage->save();
                if($key==0){
                    $produit->img = $finalImagePathName;
                    $produit->save();
                }

            }
        }    

        if ($request->couleurProduit) {
            foreach ($request->couleurProduit as $couleur) {
                CouleurProduit::create([
                    'produit_id' => $produit->id,
                    'couleur_id' => $couleur
                ]);
            }
        }
        if ($request->tailleProduit) {
            foreach ($request->tailleProduit as $taille) {
                TailleProduit::create([
                    'produit_id' => $produit->id,
                    'taille_id' => $taille
                ]);
            }
        }

        return redirect('/produits')->with('status', 'Produit a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produits::findOrFail($id);
        $categorie = Categorie::all();
        $sous_categorie = SousCategorie::all();
        $image_produit = ImageProduit::where('produit_id',$produit->id)->get();
        return view('admin.produit.edit', compact('produit','image_produit','categorie','sous_categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'lib' => 'sometimes',
            'ref' => 'sometimes',
            'status' => 'sometimes',
            'small_desc' => 'sometimes',
            'desc' => 'sometimes',
            'prix' => 'sometimes',
            'prix_promo' => 'sometimes',
            'qte' => 'sometimes',
            'categorie_id' => 'nullable|sometimes',
            'sous_categorie_id' => 'nullable|sometimes',
         ]);
        $produit = Produits::find($id);
        if ($request->has('lib')) {
            $produit->lib = $request->lib;
        }
        if ($request->has('ref')) {

            $produit->ref = $request->ref;
        }
        if ($request->has('status')) {
            $produit->status = $request->status;
        }
        if ($request->has('small_desc')) {
            $produit->small_desc = $request->small_desc;
        }
        if ($request->has('desc')) {
            $produit->desc = $request->desc;
        }
        if ($request->has('prix_promo')) {
            $produit->prix_promo = $request->prix_promo;
        }
        if ($request->has('prix')) {
            $produit->prix = $request->prix;
        }
        if ($request->has('qte')) {
            $produit->qte = $request->qte;
        }
        if ($request->has('sale')) {
            $produit->sale = $request->sale;
        }
        if ($request->has('bestseller')) {
            $produit->bestseller = $request->bestseller;
        }
        $produit->save();
        if ($request->hasFile('img')) {
         
            $uploadPath = 'img_produits/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            foreach($request->file('img') as $key=> $prodImg){
                $extention = $prodImg->getClientOriginalName();
                $fileName = time().'.'.$extention;
                $prodImg->move($uploadPath , $fileName);
                $finalImagePathName = $uploadPath .''. $fileName;
                $produitImage = new ImageProduit();
                $produitImage->produit_id = $produit->id;
                $produitImage->img = $finalImagePathName;
                $produitImage->save();

                if($key==0){
                    $produit->img = $finalImagePathName;
                    $produit->save();
                }

            }
        }  

        //return redirect('edit-produits/'.$produit->id)->with('status', 'Produit a été Supprimer avec succès');
         return redirect('/produits')->with('status', 'produits a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $couleur_produits = CouleurProduit::where('produit_id', $id)->get();
        foreach ($couleur_produits as $couleur_produit){
            $couleurProduit = CouleurProduit::where('id', $couleur_produit->id)->first();
            $couleurProduit = $couleurProduit->delete();
        }

        $taille_produits = TailleProduit::where('produit_id', $id)->get();
        foreach ($taille_produits as $taille_produit){
            $TailleProduit = TailleProduit::where('id', $taille_produit->id)->first();
            $TailleProduit = $TailleProduit->delete();
        }

        

        $produit = Produits::findOrFail($id);
        $produit->delete();
        return redirect('/produits')->with('status', 'Produit a été Supprimer avec succès');
    }

    public function searchProductByName(Request $request)
    {
        if ($request->has('search')) {
            $produit = Produits::where('lib', 'like', '%' . $request->get('search') . '%')->get();
        } else {
            $produit = Produits::all();
        }
        $listeCateg = Categorie::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {

            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        return view('frontEnd.product', compact('categorie', 'produit'));
    }

    public function searchProduct(Request $request)
    {
        $produit = Produits::orderBy('id');
        if ($request->has('search')) {
            $produit = $produit->where('lib', 'like', '%' . $request->get('search') . '%');
        }
        if ($request->has('min_value') && !is_null($request->get('min_value'))) {
            $produit = $produit->where('prix', '>=', $request->get('min_value'));
        }
        if ($request->has('max_value') && !is_null($request->get('max_value'))) {
            $produit = Produits::where('prix', '<=', $request->get('max_value'));
        }
        $SousCategorie = SousCategorie::all();
        foreach ($SousCategorie as $sous_categ) {
            if ($request->has($sous_categ->id)) {
                $produit = $produit->where('sous_categorie_id', '=', $sous_categ->id);
            }
        }
        $produit = $produit->get();
        $listeCateg = Categorie::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        return view('frontEnd.product', compact('categorie', 'produit'));
    }

    public function PanierProduct(Request $request)
    {
        $listeCateg = Categorie::all();
        $information = Information::all();
        $total = 0;
        $reqq = $request;
        $produit = [];
    
        if ($request->has('id_product')) {
            $liste_product = $request->get('id_product');
            foreach ($liste_product as $produc) {
                $current_product = Produits::where('id', '=', $produc)->first();
                $quantite = $request->get('quantite_' . $produc);
                
                // Utiliser le prix_promo s'il est différent de null, sinon utiliser le prix
                $prixUnitaire = $current_product->prix_promo !== null ? $current_product->prix_promo : $current_product->prix;
    
                $total += floatval($quantite) * $prixUnitaire;
                
                $current_product['quantite'] = $quantite;
                $produit[] = $current_product;
            }
        }
    
        return view('frontEnd.Panier', compact('produit', 'total', 'information', 'listeCateg'));
    }
    

    
   
    public function ConfirmePanier(Request $request)
    {
        $listeCateg = Categorie::all();
        $information = Information::all();
    
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');
        $phone = $request->get('phone');
    
        $Commande = new Commande();
        $Commande->nom = $nom;
        $Commande->prenom = $prenom;
        $Commande->email = $email;
        $Commande->tel = $phone;
        $Commande->status = 'en cours';
        $Commande->save();
    
        $liste_produit = $request->get('liste_product');
        $liste_quantite = $request->get('quantite_product');
        $prix_total = 0;
    
        $couleurs = $request->get('couleur');
        $tailles = $request->get('taille');
        $couleurId = $request->get('selected_couleur');

    
        foreach ($liste_produit as $key => $produc) {
            $produit = $produc;
    
            $quantite = isset($liste_quantite[$key]) ? $liste_quantite[$key] : 0;
    
            $commande_produit = new ProduitCommande();

            $commande_produit->commande_id = $Commande->id;
            $commande_produit->produit_id = $produc;
            $commande_produit->qte = $quantite;
            $commande_produit->commande_id = $Commande->id;

            
            
            
    
            $prixProduit = Produits::where('id', $produit)->first();
            $prix_par_produit = floatval($prixProduit->prix) * $quantite;
            $commande_produit->prix = $prix_par_produit;
            $prix_total += $prix_par_produit;
    
            // Vérifier si la couleur et la taille sont sélectionnées
            if (isset($couleurs[$key])) {
                $couleurId = $couleurs[$key];
                $couleur = Couleur::where('id', $couleurId)->first();
                if ($couleur) {
                    $commande_produit->couleur = $couleur->nom;
                }
            }
    
            if (isset($tailles[$key])) {
                $tailleId = $tailles[$key];
                $taille = Taille::where('id', $tailleId)->first();
                if ($taille) {
                    $commande_produit->taille = $taille->taille;
                }
            }
    
            $commande_produit->save();
        }
    
        $Commande->prix = $prix_total;
        $Commande->save();
        return view('frontEnd.ValidationCommande', compact('information', 'listeCateg'));
    }
    


    public function destroyImage($id)
    {
        $ImageProduit = ImageProduit::findOrFail($id);
        $produitId=$ImageProduit->produit_id;
        $ImageProduit->delete();
        
        return redirect('edit-produits/'.$produitId)->with('status', 'Produit a été Supprimer avec succès');
    }
}
