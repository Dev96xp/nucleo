<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Asignacion masiva
    protected $guarded = ['id'];

    //protected $fillable = ['name','slug','image','icon'];  //app2

    use HasFactory;
    const ACTIVE = 1;
    const INACTIVE = 2;
    const PENDING = 3;
}
