<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporadas extends Model
{
    protected $table = 'temporadas';
    
    protected $fillable = [

        'nombre','nombre_ingles','descripcion','descripcion_ingles','active','unica'

    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
