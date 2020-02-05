<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [

        'nombre','pais_id','estado_id','activa'

    ];

    public function zona_entrega()
    {
        return $this->hasMany('App\Zona_entrega');
    }
}
