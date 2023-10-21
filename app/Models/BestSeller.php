<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestSeller extends Model
{
    use HasFactory;
    protected $table = 'best_seller';
    protected $fillable = [
        'lib',
        'ref',
        'status',
        'small_desc',
        'desc',
        'prix',
        'prix_promo',
        'img',
        'qte',
    ];
}
