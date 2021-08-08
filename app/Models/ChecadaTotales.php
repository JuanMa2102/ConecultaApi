<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChecadaTotales extends Model
{
    use HasFactory;
    protected $fillable = [
        'Total',
        'Retardos',
        'Faltas'
    ];
}
