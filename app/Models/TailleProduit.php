<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TailleProduit extends Model
{
    use HasFactory;
    protected $table = 'taille_produit';
    protected $fillable = [
        'produit_id',
        'taille_id'
    ];

    public function taille()
    {
        return $this->belongsTo(Taille::class);
    }
    public function produit()
    {
        return $this->belongsTo(Produits::class);
    }
}
