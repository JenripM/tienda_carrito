<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'idproducto';
    public $timestamps = false;
    protected $fillable = ["nombrep","descripcion","abreviatura","cantidad","precio","ruta", "estado"];
}
