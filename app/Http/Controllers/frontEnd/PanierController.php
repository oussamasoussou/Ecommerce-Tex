<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\ImageProduit;
use Illuminate\Http\Request;
use App\Models\Panier;
use App\Models\Produits;

class PanierController extends Controller
{
    public function storePanier(Request $request)
    {
        // Récupérer le produit en fonction de l'ID
        $produit = Produits::find($request->produit_id);

        if (!$produit) {
            // Gérer le cas où le produit n'est pas trouvé
            return redirect()->route('nom_de_votre_route')->with('error', 'Produit non trouvé.');
        }

        // Récupérer l'adresse IP du client
        $ip = $request->ip();

        // Déterminer le prix en fonction de prix_promo ou prix
        $prix = ($produit->prix_promo != null) ? $produit->prix_promo : $produit->prix;

        // Créer une nouvelle instance de Panier avec les données du produit
        $panier = new Panier();
        $panier->produit_id = $produit->id;
        $panier->qte = $request->input('qte', 1);
        $panier->couleur = $request->input('couleur');
        $panier->taille = $request->input('taille');
        $panier->confirmed = 0;
        $panier->ip = $ip;
        $panier->prix = $prix * $request->input('qte', 1);
        $panier->save();



        if ($panier) {
            // Le panier a été créé avec succès
            return response()->json(['success' => 'Panier créé avec succès.']);
        } else {
            // Gérer le cas où le panier n'a pas pu être créé
            return response()->json(['error' => 'Erreur lors de la création du panier.'], 500);
        }
    }


    public function supprimerProduit($id)
    {
        $panier = Panier::findOrFail($id);
        $panier->delete();
        return response()->json(['success' => true]);
    }



    public function countPanier()
    {
        $ip = Request::ip(); // Récupérer l'adresse IP de l'utilisateur connecté

        // Compter le nombre de produits dans le panier pour l'utilisateur spécifique
        $nombreProduitsPanier = Panier::where('ip', $ip)->count();

        return $nombreProduitsPanier;
    }


}
