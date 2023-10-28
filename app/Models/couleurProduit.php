<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class couleurProduit extends Model
{
    use HasFactory;

    protected $table = 'couleur_produit';
    protected $fillable = [
        'produit_id',
        'couleur_id'
    ];



    public function couleur()
    {
        return $this->belongsTo(Couleur::class);
    }
    public function produit()
    {
        return $this->belongsTo(Produits::class);
    }
}
