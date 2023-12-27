<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    // Relacion MUCHOS A MUCHOS
    public function projects()      // Nombre del metodo, que recuperara los proyectos que tenga esta section
    {
        return $this->belongsToMany(project::class);
    }

    public function items()      // Nombre del metodo, que recuperara las seciones que tenga este projecto
    {
        return $this->belongsToMany(item::class);
    }
}
