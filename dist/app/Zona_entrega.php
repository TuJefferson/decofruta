<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona_entrega extends Model
{
    protected $table = 'zona_entrega';

    protected $fillable = [

        'nombre','zona_codigo','codigo_postal','precio','precio_dolar','activa','tienda_id'

    ];

    //relacion con ciudades
    public function ciudades()
    {
        return $this->belongsTo('App\Ciudades', 'cuidad_id', 'id');
    }

    //relacion con paises
    public function paises()
    {
        return $this->belongsTo('App\Paises', 'pais_id', 'id');
    }
}
