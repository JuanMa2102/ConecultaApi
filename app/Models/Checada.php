<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checada extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'Emp', 
        'Trabajador', 
        'Fecha', 
        'HoraE', 
        'HoraS', 
        'HoraS2', 
        'HoraE2', 
        'TipoChecada', 
        'Justificada', 
        'Retardo', 
        'Falta', 
        'Disciplinarios', 
        'Faltas',
    ];
}
