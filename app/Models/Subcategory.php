<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    const ACTIVE = 1;
    const INACTIVE = 2;
    const PENDING = 3;

    // Campos protejidos por asignacionmasiva
    protected $guarded = ['id', 'created_at', 'update_at'];


    // IMPORTANTE : Indica que use el slug en lugar del id, para mostrarlo en la url
    // url amigable
    public function getRouteKeyName(){
        return 'slug';
    }

}
