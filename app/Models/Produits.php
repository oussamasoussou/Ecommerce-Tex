<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $table = 'produit';
    protected $fillable = [
        'lib',
        'ref',
        'status',
        'small_desc',
        'desc',
        'prix',
        'prix_promo',
        'qte',
        'categorie_id',
        'sous_categorie_id',
        'sale',
        'bestseller',
    ];

    public function categorie()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function sous_categorie()
    {
        return $this->belongsToMany(SousCategorie::class);
    }

    public function image_produit()
    {
        return $this->belongsToMany(ImageProduit::class);
    }

    public function commande()
    {
        return $this->belongsToMany(ProduitCommande::class);
    }
}