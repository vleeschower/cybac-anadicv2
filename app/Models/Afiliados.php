<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliados extends Model
{
    use HasFactory;

    protected $table="afiliados";

    protected $fillable = ['nombre', 'correo', 'telefono', 'calles', 'sepomex_id', 'num_id', 'num_ext', 'referencias', 'logo', 'web'];
}
