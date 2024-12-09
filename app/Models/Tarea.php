<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    // Indicar qué campos pueden ser asignados masivamente
    protected $fillable = ['titulo', 'descripcion', 'completado'];
}
