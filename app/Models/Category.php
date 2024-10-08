<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //DB::table('category')->insert(['category'=>'M','description'=>'Pendingin Ruangan']);

    protected $table = "category";
    
    protected $fillable = [
        'name',
        'category',
        'description',
    ];
}
