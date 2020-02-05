<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{

	protected $fillable = [

        'nombre','active','imagen_pais','pais_email','country_shortcode','href_pais','impuesto_id'

    ];

    //relacion con moneda
    public function moneda()
    {
        return $this->belongsTo('App\Moneda', 'moneda_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function zona_entrega()
    {
        return $this->hasMany('App\Zona_entrega');
    }



}
