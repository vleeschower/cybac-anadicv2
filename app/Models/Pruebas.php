<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
    use HasFactory;
    protected $table = "prueba";
    
    protected $afillable = ['introduccion','mision','vision','valores','imagenes'];
}
