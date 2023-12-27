<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Relacion MUCHOS A MUCHOS
    public function sections()      // Nombre del metodo, que recuperara los proyectos que tenga esta section
    {
        return $this->belongsToMany(section::class);
    }
}
