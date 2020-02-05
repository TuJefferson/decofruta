<?php

namespace App\Http\Controllers\Guatemala;

use App\Http\Controllers\Controller;

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





class G_StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexstoreguatemala()
    {
        

        SEO::setTitle('Decofruta');
        SEO::setDescription('Ejemplo de descripción de la página');
        SEO::opengraph()->setUrl('http://nigmacode.com');
        SEO::setCanonical('https://nigmacode.com');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@Nigmacode');

        $productos = Product::all();
        $productos_destacados = Product::where('destacado', 1)->get();
        
        $productos_cumplaeños = Product::where('categoria_id', 8)->get();

        $paises = Paises::where('active', 1)->get();
        $idiomas = Idiomas::all();
        $monedas = Moneda::all();

        $categorias = Category::where('active', 1)->get();

        $temporadas = Temporadas::where('activa', 1)->get();
        $temporadaunica = Temporadas::where('unica', 1)->first();

        $postres = Postres::all();
        // dd($postres);

        $bebidas = Bebidas::where('activo', 1)->get();

        
        return view('guatemala.tienda.indexguatemala', compact('productos', 'productos_destacados', 'productos_cumplaeños', 'paises', 'idiomas', 'monedas', 'categorias', 'temporadas', 'temporadaunica','postres','bebidas',));
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
        $paises = Paises::where('active', 1)->get();

        $producto = Product::where('slug', $slug)->first();

        $idiomas = Idiomas::all();
        
        $monedas = Moneda::all();

        //dd($productos);

        $categorias = Category::all();
        //dd($categorias);

        return view('store.show', compact('producto', 'categorias', 'paises', 'idiomas', 'monedas'));
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
