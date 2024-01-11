<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Carousel;
use App\Models\Couleur;
use App\Models\Livraison;
use App\Models\Panier;
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
        $Listebestseller = Produits::where('bestseller', '=', 1)->take(3)->get();
        $Apropos = Apropos::all();
        $ip = request()->ip(); // Récupérer l'IP de l'utilisateur connecté
        $paniers = Panier::where('ip', $ip)->get();
        $categorie = [];
        $produit = [];
        $bestseller = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        foreach ($Listeproduit as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->get();
            $pro['img'] = $img;
            $produit[] = $pro;
        }

        foreach ($Listebestseller as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->take(1)->get();
            $pro['img'] = $img;
            $Listebestseller[] = $pro;
        }


        return view('frontEnd.index', compact('paniers', 'carousel', 'produit', 'Listebestseller', 'information', 'listeCateg', 'Apropos'));
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
        return view('frontEnd.product', compact('listeCateg', 'produit', 'information', 'couleurs', 'tailles'));
    }



    public function propos()
    {
        $produits = Produits::all();
        $listeCateg = Categorie::all();
        $information = Information::all();
        $carousel = Carousel::all();
        $bestseller = BestSeller::all();
        $propos = Apropos::all();
        $categorie = [];
    
        // Récupérer l'adresse IP de l'utilisateur
        $ip = request()->ip();
    
        // Compter le nombre de produits dans le panier pour l'adresse IP spécifiée
        $nombreProduitsPanier = Panier::where('ip', $ip)->count();
        $paniers = Panier::where('ip', $ip)->get();
    
        // Initialiser un tableau pour les images
        $images = ImageProduit::whereIn('produit_id', $paniers->pluck('produit_id'))->get()->groupBy('produit_id');

    
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        $id= request()->id;
        $produit = Produits::where('id', $id)->first();
    
        return view('frontEnd.propos', compact('produit', 'images', 'paniers', 'nombreProduitsPanier', 'carousel', 'produits', 'bestseller', 'information', 'listeCateg', 'propos'));
    }
    
    public function getDetailsProduct($id)
    {
        $produitCouleurs = Produits::with('couleurProduits.couleur')->find($id);

        // Récupérer le produit et ses tailles associées
        $tailleProduit = Produits::with('tailleProduits.taille')->find($id);

        // Récupérer l'adresse IP de l'utilisateur
        $ip = request()->ip();

        // Compter le nombre de produits dans le panier pour l'adresse IP spécifiée
        $nombreProduitsPanier = Panier::where('ip', $ip)->count();

        // Récupérer les informations sur la livraison
        $livraison = Livraison::first();
        $prixLivraison = $livraison->prix;

        // Récupérer tous les produits dans le panier pour l'adresse IP spécifiée
        $produitsPanier = Panier::where('ip', $ip)->get();

        // Initialiser la variable pour le prix total du panier
        $prixTotalPanier = 0;

        // Parcourir chaque produit dans le panier et ajouter son prix total au prix total du panier
        foreach ($produitsPanier as $produit) {
            $prixTotalPanier += $produit->prix; // Multiplication par la quantité
        }

        $paniers = Panier::where('ip', $ip)->get();




        $produit = Produits::where('id', $id)->first();
        $Listeproduits = Produits::orderBy('id', 'desc')->take(5)->get();
        $Listeproduit = [];

        foreach ($Listeproduits as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->take(1)->get();
            $pro['img'] = $img;
            $Listeproduit[] = $pro;
        }


        $listeCateg = Categorie::all();
        $information = Information::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        $image_produit = ImageProduit::where('produit_id', $produit->id)->get();
        $images = [];
        foreach ($image_produit as $img) {
            $images[$img->produit_id] = $img->img;
        }
        return view('frontEnd.details_product', compact('prixLivraison', 'nombreProduitsPanier', 'prixTotalPanier', 'images', 'tailleProduit', 'paniers', 'categorie', 'produit', 'information', 'listeCateg', 'Listeproduit', 'image_produit', 'produitCouleurs'));
    }

    public function detail(Request $request, $id)
    {
        // Récupérer le produit et ses couleurs associées
        $produitCouleurs = Produits::with('couleurProduits.couleur')->find($id);

        // Récupérer le produit et ses tailles associées
        $tailleProduit = Produits::with('tailleProduits.taille')->find($id);

        // Récupérer l'adresse IP de l'utilisateur
        $ip = $request->ip();

        // Compter le nombre de produits dans le panier pour l'adresse IP spécifiée
        $nombreProduitsPanier = Panier::where('ip', $ip)->count();

        // Récupérer les informations sur la livraison
        $livraison = Livraison::first();
        $prixLivraison = $livraison->prix;

        // Récupérer tous les produits dans le panier pour l'adresse IP spécifiée
        $produitsPanier = Panier::where('ip', $ip)->get();

        // Initialiser la variable pour le prix total du panier
        $prixTotalPanier = 0;

        // Parcourir chaque produit dans le panier et ajouter son prix total au prix total du panier
        foreach ($produitsPanier as $produit) {
            $prixTotalPanier += $produit->prix; // Multiplication par la quantité
        }

        // Récupérer les autres données nécessaires pour la vue
        $produit = Produits::where('id', $id)->first();
        $Listeproduits = Produits::orderBy('id', 'desc')->take(5)->get();
        $Listeproduit = [];
        foreach ($Listeproduits as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->take(1)->get();
            $pro['img'] = $img;
            $Listeproduit[] = $pro;
        }

        $ip = request()->ip();
        $paniers = Panier::where('ip', $ip)->get();

        $listeCateg = Categorie::all();
        $information = Information::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }

        $image_produit = ImageProduit::where('produit_id', $produit->id)->get();
        $images = [];
        foreach ($image_produit as $img) {
            $images[$img->produit_id] = $img->img;
        }

        // Passer toutes les données nécessaires à la vue
        return view('frontEnd.selectProduitPanier', compact('prixLivraison', 'nombreProduitsPanier', 'prixTotalPanier', 'images', 'tailleProduit', 'paniers', 'categorie', 'produit', 'information', 'listeCateg', 'Listeproduit', 'image_produit', 'produitCouleurs'));
    }

    public function getDetailsSeller($id)
    {
        $produit = Produits::where('id', $id)->first();
        $ip = request()->ip(); // Récupérer l'IP de l'utilisateur connecté
        $paniers = Panier::where('ip', $ip)->get();
        $Listeproduits = Produits::orderBy('id', 'desc')->take(5)->get();
        $Listeproduit = [];
        foreach ($Listeproduits as $pro) {
            $img = ImageProduit::where('produit_id', $pro->id)->take(1)->get();
            $pro['img'] = $img;
            $Listeproduit[] = $pro;
        }


        $listeCateg = Categorie::all();
        $information = Information::all();
        $categorie = [];
        foreach ($listeCateg as $ca) {
            $ca['sous_categorie'] = $ca->sous_categorie;
            $categorie[] = $ca;
        }
        $image_produit = ImageProduit::where('produit_id', $produit->id)->get();
        return view('frontEnd.details_product', compact('paniers', 'categorie', 'produit', 'information', 'listeCateg', 'Listeproduit', 'image_produit'));
    }
}
