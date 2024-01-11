<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'panier';
    protected $fillable = [
        'produit_id',
        'prix',
        'qte',
        'couleur',
        'taille',
        'confirmed',
        'ip',
    ];

    public function produit()
    {
        return $this->belongsToMany(Produits::class);
    }

  
}
