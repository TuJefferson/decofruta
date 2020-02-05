<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    protected $table = 'tiendas';

    protected $fillable = [

        'nombre','razon_social','rif','zona','direccion','telefono_local','whatsapp','mensaje_whatsapp','email','nombrecontacto','abierta','activa','google_map'

    ];

}
