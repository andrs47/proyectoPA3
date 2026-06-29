<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    protected $table = 'rutinas';

    protected $fillable = [
        'nombre',
        'duracion',
        'nivel',
        'entrenador_id'
    ];

    public function entrenador()
    {
        return $this->belongsTo(Entrenador::class);
    }
}
