<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    //Spesifik tabel
    protected $table = 'product';

    protected $fillable = [
        'name',
        'image',
        'description',
        'quantity',
    ];
}
