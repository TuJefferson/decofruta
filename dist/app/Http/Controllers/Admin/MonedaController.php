<?php

namespace App\Http\Controllers\Admin;

use App\Moneda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MonedaController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    {
        $monedas = Moneda::latest()->paginate(5);

  

        return view('admin.monedas.index', compact('monedas'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {
        return view('admin.monedas.create');
    }

  

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)
    {

        // $request->validate([

        // 'name' => 'required',

        // 'slug' => 'required',

        // 'description' => 'required',

        // 'extract' => 'required',

        // 'price_dolar' => 'required',

        // 'image' => 'required',

        // 'destacado' => 'required',

        // 'active' => 'required',

        // 'estatus_es' => 'required',

        // ]);

        //dd($request->slug);

        Moneda::create($request->all());

        toast('Success Toast', 'success');

        return redirect()->route('monedas.index');
    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\Moneda  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Moneda $moneda)
    {
        return view('admin.monedas.show', compact('moneda'));
    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Moneda  $monedas

     * @return \Illuminate\Http\Response

     */

    public function edit(Moneda $moneda)
    {
        return view('admin.monedas.edit', compact('moneda'));
    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Moneda  $monedas

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Moneda $moneda)
    {

        // $request->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);

  
        $moneda->update($request->all());

  

        return redirect()->route('monedas.index')

                        ->with('success', 'Moneda updated successfully');
    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Moneda  $monedas

     * @return \Illuminate\Http\Response

     */

    public function destroy(Moneda $moneda)
    {
        $moneda->delete();

  

        return redirect()->route('monedas.index')

                        ->with('success', 'Moneda deleted successfully');
    }
}
