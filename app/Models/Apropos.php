<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apropos extends Model
{
    use HasFactory;
    protected $table = 'propos';
    protected $fillable = [
        'titre',
        'desc',
        'img'
    ];
}
