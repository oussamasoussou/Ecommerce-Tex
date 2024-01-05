<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Carousel;
use App\Models\Couleur;
use App\Models\Produits;
use App\Models\BestSeller;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Information;
use App\Models\ImageProduit;


use App\Models\Taille;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {  
        $Listeproduit = Produits::all();
        $listeCateg = Categorie::all();
        $information = Information::all();
        $carousel = Carousel::all();
        $Listebestseller = Produits::where('bestseller','=',1)->take(3)->get();
        $Apropos=Apropos::all();
        $categorie = [];
        $produit = [];
        $bestseller=[];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        foreach ($Listeproduit as $pro) {
            $img=ImageProduit::where('produit_id',$pro->id)->get();
            $pro['img'] =$img ;
            $produit[] = $pro;
        }

        foreach ($Listebestseller as $pro) {
            $img=ImageProduit::where('produit_id',$pro->id)->take(1)->get();
            $pro['img'] =$img ;
            $Listebestseller[] = $pro;
        }


        return view('frontEnd.index', compact('carousel', 'produit', 'Listebestseller', 'information', 'listeCateg','Apropos'));
    }

    public function getProduct($id)
    {
        $couleurs = Couleur::all();
        $tailles = Taille::all();
        $Listeproduit = Produits::where('sous_categorie_id', $id)->get();
        $produit = [];
        $information = Information::all();
    
        foreach ($Listeproduit as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->get();
            $pro['img'] = $img;
            $produit[] = $pro;
        }
    
        $listeCateg = Categorie::with('sous_categorie')->get();
        return view('frontEnd.product', compact('listeCateg', 'produit', 'information','couleurs', 'tailles'));
    }
    


    public function propos()
    {
        $produit = Produits::all();
        $listeCateg = Categorie::all();
        $information = Information::all();
        $carousel = Carousel::all();
        $bestseller = BestSeller::all();
        $propos = Apropos::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }

        return view('frontEnd.propos', compact('carousel', 'produit', 'bestseller', 'information', 'listeCateg', 'propos'));
    }

    public function getDetailsProduct($id)
    {
        $produitCouleurs = Produits::with('couleurProduits.couleur')->find($id);

        $produit = Produits::where('id',$id)->first();
         $Listeproduits= Produits::orderBy('id', 'desc')->take(5)->get();
        $Listeproduit=[];
        foreach ($Listeproduits as $pro) {
            $img=ImageProduit::where('produit_id',$pro->id)->take(1)->get();
            $pro['img'] =$img ;
            $Listeproduit[] = $pro;
        }

      
        $listeCateg = Categorie::all();
        $information = Information::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        $image_produit = ImageProduit::where('produit_id',$produit->id)->get();
        return view('frontEnd.details_product', compact('categorie', 'produit', 'information','listeCateg','Listeproduit','image_produit','produitCouleurs'));
    }
    public function getDetailsSeller($id)
    {
        $produit = Produits::where('id',$id)->first();
        
        $Listeproduits= Produits::orderBy('id', 'desc')->take(5)->get();
        $Listeproduit=[];
        foreach ($Listeproduits as $pro) {
            $img=ImageProduit::where('produit_id',$pro->id)->take(1)->get();
            $pro['img'] =$img ;
            $Listeproduit[] = $pro;
        }

      
        $listeCateg = Categorie::all();
        $information = Information::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        $image_produit = ImageProduit::where('produit_id',$produit->id)->get();
        return view('frontEnd.details_product', compact('categorie', 'produit', 'information','listeCateg','Listeproduit','image_produit'));
    }
}
