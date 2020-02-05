<?php

  

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [

        'nombre','nombre_ingles','slug','slug_ingles','descripcion','descripcion_ingles','extract','price_dolar','price','imagen','imagen_ingles','orden','tamano','pais_id','moneda_id','destacado','active','estatus_es','estatus_en'

    ];

    //relacion con categorias
    public function category()
    {
        return $this->belongsTo('App\Category', 'categoria_id', 'id');
    }

    //relacion con Paises
    public function paises()
    {
        return $this->belongsTo('App\Paises', 'pais_id', 'id');
    }

    //relacion con temporada
    public function temporadas()
    {
        return $this->belongsTo('App\Temporadas', 'temporada_id', 'id');
    }

    //scope buscadores productos
    public function scopeNombres($query, $nombres) {
        if ($nombres) {
            return $query->where('nombre','like',"%$nombres%");
        }
    }
}
