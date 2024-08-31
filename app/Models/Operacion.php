<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;
    protected $table = 'operaciones';
    protected $primaryKey = 'idoperacion';
    public $timestamps = false;
    protected $fillable = ["descripcion","subtotal","igv","total", "idcliente","estado"];
}
