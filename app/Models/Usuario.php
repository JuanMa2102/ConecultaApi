<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID', 
        'usuario', 
        'pass', 
        'nivel_acceso', 
        'trabajador', 
        'rfc', 
        'nombre', 
        'depto',
    ];
}
