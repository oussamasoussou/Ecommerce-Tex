<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'lib',
        'img'
    ];

    public function sous_categorie()
    {
        return $this->hasMany(SousCategorie::class, 'categorie_id', 'id');
    }
    public function produits()
    {
        return $this->belongsToMany(Produits::class);
    }
}
