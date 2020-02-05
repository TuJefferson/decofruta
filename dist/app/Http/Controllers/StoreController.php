<?php

namespace App\Http\Controllers;

use SEO;
use App\Moneda;
use App\Paises;
use App\Idiomas;
use App\Product;
use App\Bebidas;
use App\Postres;
use App\Category;
use App\Temporadas;
use App\Decolatier;
use App\Zona_entrega;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexstore()
    {
        SEO::setTitle('Decofruta');
        SEO::setDescription('Ejemplo de descripción de la página');
        SEO::opengraph()->setUrl('http://nigmacode.com');
        SEO::setCanonical('https://nigmacode.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@Nigmacode');

        // variables header
        $paises = Paises::where('active', 1)->get();
        $idiomas = Idiomas::all();
        $monedas = Moneda::all();
        $temporadas = Temporadas::where('activa', 1)->get();
        $temporadaunica = Temporadas::where('activa', 1)->where('unica', 1)->first();
        $postres = Postres::all();
        $bebidas = Bebidas::where('activo', 1)->get();
        $categorias = Category::where('active', 1)->get();

        $productos = Product::where('pais_id', 3)->get();
        $productos_destacados = Product::where('destacado', 1)->where('pais_id', 3)->get();


        $productos_amor = Product::where('categoria_id', 8)->where('pais_id', 3)->get();
        
        $productos_cumpleanos = Product::where('categoria_id', 1)->where('pais_id', 3)->get();

        $productos_nacimiento = Product::where('categoria_id', 9)->where('pais_id', 3)->get();

        $productos_parael = Product::where('categoria_id', 10)->where('pais_id', 3)->get();

        $productos_paraella = Product::where('categoria_id', 11)->where('pais_id', 3)->get();

        $productos_felicitaciones = Product::where('categoria_id', 12)->where('pais_id', 3)->get();

        $productos_celebraciones = Product::where('categoria_id', 15)->where('pais_id', 3)->get();

        $productos_sanvalentin = Product::where('categoria_id', 8)->where('pais_id', 3)->get();







        // dd($postres);


        
        return view('store.index', compact('productos', 'productos_destacados', 'productos_amor','productos_cumpleanos','productos_nacimiento','productos_parael','productos_paraella','productos_felicitaciones','productos_celebraciones','productos_sanvalentin', 'paises', 'idiomas', 'monedas', 'categorias', 'temporadas', 'temporadaunica','postres','bebidas'));
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
    public function showstore($slug)
    {
        // variables header
        $paises = Paises::where('active', 1)->get();
        $monedas = Moneda::all();
        $temporadas = Temporadas::where('activa', 1)->get();
        $temporadaunica = Temporadas::where('unica', 1)->first();
        $postres = Postres::all();
        $bebidas = Bebidas::where('activo', 1)->get();
        $categorias = Category::all();
        $idiomas = Idiomas::all();


        $producto = Product::where('slug', $slug)->first();

        $zonas = Zona_entrega::where('pais_id', 3)->get();


        return view('store.show', compact('producto', 'categorias', 'paises', 'idiomas', 'monedas','temporadas','temporadaunica','postres','bebidas','zonas'));
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
