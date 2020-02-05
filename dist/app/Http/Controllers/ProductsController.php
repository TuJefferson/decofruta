<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paises;
use App\Product;
use App\Idiomas;
use App\Moneda;
use App\Category;
use App\Temporadas;
use App\Postres;
use App\Bebidas;



class ProductsController extends Controller
{
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function vertodos(Request $request)
    {
            // variables header
            $monedas = Moneda::all();
            $idiomas = Idiomas::all();
            $postres = Postres::all();
            $paises = Paises::where('active', 1)->get();
            $bebidas = Bebidas::where('activo', 1)->get();
            $categorias = Category::where('active', 1)->get();
            $temporadas = Temporadas::where('activa', 1)->get();
            $temporadaunica = Temporadas::where('activa', 1)->where('unica', 1)->first();

            $categorias = Category::where('active', 1)->get();

            //variable si hay busqueda
            $nombre = $request->get('buscarpor');

            $productos = Product::nombres($nombre)->paginate(3);



            return view('store.todos', compact('productos','bebidas','postres','paises','idiomas','monedas','categorias','temporadas','temporadaunica'));
    }

    public function vercategoria($id)
    {
            // variables header
            $monedas = Moneda::all();
            $idiomas = Idiomas::all();
            $postres = Postres::all();
            $paises = Paises::where('active', 1)->get();
            $bebidas = Bebidas::where('activo', 1)->get();
            $temporadas = Temporadas::where('activa', 1)->get();
            $temporadaunica = Temporadas::where('activa', 1)->where('unica', 1)->first();

            $categorias = Category::where('active', 1)->get();

            $productos = Product::where('categoria_id', $id)->paginate(10);

            return view('store.todos', compact('productos','bebidas','postres','paises','idiomas','monedas','categorias','temporadas','temporadaunica'));
    }


    public function vertemporada($id)
    {
            // variables header
            $monedas = Moneda::all();
            $idiomas = Idiomas::all();
            $postres = Postres::all();
            $paises = Paises::where('active', 1)->get();
            $bebidas = Bebidas::where('activo', 1)->get();
            $categorias = Category::where('active', 1)->get();
            $temporadas = Temporadas::where('activa', 1)->get();
            $temporadaunica = Temporadas::where('activa', 1)->where('unica', 1)->first();

            $productos = Product::where('temporada_id', $id)->paginate(10);

            return view('store.todos', compact('productos','bebidas','postres','paises','idiomas','monedas','categorias','temporadas','temporadaunica'));
    }

  
   
}
