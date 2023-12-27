<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // RELACION MUCHOS A MUCHOS

    public function sections()      // Nombre del metodo, que recuperara las seciones que tenga este projecto
    {
        return $this->belongsToMany('App\Models\Section');
    }
}
