<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\ImageProduit;
use App\Models\ProduitCommande;
use App\Models\Produits;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commande = Commande::all();
        
        
        return view('admin.index', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commande = Commande::find($id);
        $listeProduitparcommande = [];
        $commande_produit = ProduitCommande::where('commande_id', $commande->id)->get();

        foreach ($commande_produit as $cp) {

            $produit = Produits::where('id', $cp->produit_id)->first();
            $image = ImageProduit::where('produit_id', $cp->produit_id )->first();
            $listeProduitparcommande[] = array(
                'nom' => $produit->lib,
                'prix' => $produit->prix,
                'qte' => $cp->qte,
                'couleur' => $cp->couleur,
                'taille' => $cp->taille,
                'prix_total' => $cp->prix,
                'image' => $image ? $image->img : null,
            );
        }


        return view('admin.commande.edit', compact('commande', 'listeProduitparcommande'));
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
            'status' => 'sometimes',
        ]);
        $commande = Commande::find($id);
        if ($request->has('status')) {
            $commande->status = $request->status;
        }
        $commande->save();
        return redirect('/commandes')->with('status', 'commandes a été modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);
        $commande->delete();
        return redirect('/dashboard')->with('status', 'Produit a été Supprimer avec succès');
    }

    public function confirmation(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'sometimes',
        ]);
        $commande = Commande::find($id);

        $commande->status = 'confirmer';

        
        $listeProduit=ProduitCommande::where('commande_id',$id)->get();
        foreach($listeProduit as $cmprodui){
            $prixProduit=Produits::where('id',$cmprodui->produit_id)->first();
            $prixProduit->qte= $prixProduit->qte - $cmprodui->qte;
            $prixProduit->save();
        }
       

        $commande->save();
        $commande = Commande::all();

        return redirect('/dashboard')->with('status', 'commandes a été modifier avec succès');
    }
}
