<?php

namespace App\Http\Controllers;

use Session;
use App\Paises;
use App\Idiomas;
use App\Moneda;
use App\Product;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    
    // verificamos si existe la variable de sesion del carrito si no la creo
    public function __construct()
    {
        if(!session::has('cart')) session::put('cart', array());  
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function showcarrito()
    {
      
        $cart = session()->get('cart');

        $idiomas = Idiomas::all();
        
        $monedas = Moneda::all();

        $paises = Paises::where('active', 1)->get();
        
        

        return view('store.carrito', compact('cart','paises','idiomas','monedas'));
    }



    // public function agregarcarrito(Request $request)
    // {
    //     $id = $request->input('id');
    //     $product = Product::find($id);

    //     $session = $request->session();
    //     $cartData = ($session->get('cart')) ? $session->get('cart') : array();
        




    //     if (array_key_exists($id, $cartData)) {
            

    //         $cartData[$id]['qty']++;

       
    //     } else {


    //         $cartData[$id] = array(
    //             'qty' => 1,
    //             'name' =>' $product->name',
    //         );
    //     }


    //     $request->session()->put('cart', $cartData);

    //     return redirect()->back()->with('message', 'Product Added Successfully!');
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addcarrito(Request $request)
    {

        //dd($request);
        $id = $request->id;

        $tamano = $request->tamano;

        $product = Product::find($id);


        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        //si el carrito está vacío, este es el primer producto
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => $request->cantidad,
                        "price" => $product->price,
                        "price_dolar" => $product->price_dolar,
                        "photo" => $product->photo,
                        "categoria" => $product->category->name,
                        "tienda" => $request->tienda,
                        "tamano" =>  $tamano,

                    ]
            ];

            session()->put('cart', $cart);

            alert()->success('Excelente','Producto agregado al carrito.');

            return redirect()->route('cart-show');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            alert()->success('Excelente','Producto agregado al carrito.');

            return redirect()->route('cart-show');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => $request->cantidad,
            "price" => $product->price,
            "price_dolar" => $product->price_dolar,
            "photo" => $product->photo,
            "categoria" => $product->category->name,
            "tienda" => $request->tienda,
        ];

        session()->put('cart', $cart);

        alert()->success('Excelente','Producto agregado al carrito.');


        return redirect()->route('cart-show')->with('success', 'Login Successfully!');;

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletecarrito($id)
    {
      
        if($id) {

            $cart = session()->get('cart');

            if(isset($cart[$id])) {

                unset($cart[$id]);

                session()->put('cart', $cart);
            }

             return redirect()->route('cart-show');
        }
    }


    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function emptycarrito()
    {

        session::forget('cart');
    
        return redirect()->route('cart-show');
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
    public function updatecarrito($id, $quantity)
    {
        // $cart = session()->get('cart');
        // $cart[$id]->quantity = $quantity;
        // session()->put('cart', $cart);

        // return redirect()->route('cart-show');

        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
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
