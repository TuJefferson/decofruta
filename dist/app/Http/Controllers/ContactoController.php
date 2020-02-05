<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use App\Paises;
use App\Idiomas;
use App\Moneda;
use App\Temporadas;
use App\Postres;
use App\Bebidas;
use App\Category;
use App\Tiendas;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
       // dd('aqui');

        // variables header
        $paises = Paises::where('active', 1)->get();
        $idiomas = Idiomas::all();
        $monedas = Moneda::all();
        $temporadas = Temporadas::where('activa', 1)->get();
        $temporadaunica = Temporadas::where('activa', 1)->where('unica', 1)->first();
        $postres = Postres::all();
        $bebidas = Bebidas::where('activo', 1)->get();
        $categorias = Category::where('active', 1)->get();

        $tiendas = Tiendas::where('activa', 1)->where('abierta', 1)->where('pais_id', 3)->get();
        $pais_tienda = Paises::where('nombre', 'venezuela')->first();



        return view('store.contacto', compact('idiomas','monedas','paises','temporadas','temporadaunica','postres','bebidas','categorias','tiendas','pais_tienda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
