<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

   

class Bebidas extends Model

{
	protected $table = 'bebidas';
    
    protected $fillable = [

       'nombre','nombre_ingles','sabor_nombre','sabor_ingles','descripcion','descripcion_ingles','price','price_dolar','imagen','imagen_ingles','activa'

    ];


}