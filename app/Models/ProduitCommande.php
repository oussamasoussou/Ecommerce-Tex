<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitCommande extends Model
{
    use HasFactory;
    protected $table = 'commande_produit';
    protected $fillable = [
        'produit_id',
        'commande_id',
        'qte',
        'prix'
    ];

    public function produit()
    {
        return $this->belongsToMany(Produits::class);
    }

    public function commande()
    {
        return $this->belongsToMany(Commande::class);
    }
}
