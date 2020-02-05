<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

   

class Decolatier extends Model

{
	protected $table = 'decolatier';
    
    protected $fillable = [

       'nombre','nombre_ingles','descripcion','descripcion_ingles','price','price_dolar','imagen','imagen_ingles','activa'

    ];


}