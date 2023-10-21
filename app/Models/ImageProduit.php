<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduit extends Model
{
    use HasFactory;
    protected $table = 'image_produit';
    protected $fillable = [
        'produit_id',
        'img'
    ];

    public function produit()
    {
        return $this->belongsToMany(Produits::class);
    }
}
