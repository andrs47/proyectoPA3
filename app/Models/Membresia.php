<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;

    protected $table = 'membresias';

    protected $fillable = [
        'tipo',
        'precio',
        'duracion_meses'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}