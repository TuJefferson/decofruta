<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = [

        'nombre','nombre_ingles','descripcion','descripcion_ingles','active'

    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    //relacion con 
    public function bannerocasion()
    {
        return $this->belongsTo('App\Bannerocasion', 'bannerocacion_id', 'id');
    }
}
