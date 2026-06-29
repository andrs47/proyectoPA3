<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    use HasFactory;

    protected $table = 'entrenadores';

    protected $fillable = [
        'nombre',
        'especialidad',
        'telefono'
    ];

    public function rutinas()
    {
        return $this->hasMany(Rutina::class);
    }
}