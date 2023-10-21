<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Carousel;
use App\Models\Produits;
use App\Models\BestSeller;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Information;
use App\Models\ImageProduit;


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
        $Listeproduit = Produits::where('sous_categorie_id', $id)->get();
        $produit = [];
    
        foreach ($Listeproduit as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->get();
            $pro['img'] = $img;
            $produit[] = $pro;
        }
    
        $listeCateg = Categorie::with('sous_categorie')->get();
        $information = Information::all();
    
        return view('frontEnd.layouts.product', compact('listeCateg', 'produit', 'information'));
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
        return view('frontEnd.layouts.details_product', compact('categorie', 'produit', 'information','listeCateg','Listeproduit','image_produit'));
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
        return view('frontEnd.layouts.details_product', compact('categorie', 'produit', 'information','listeCateg','Listeproduit','image_produit'));
    }
}
