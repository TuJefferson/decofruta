<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Accesorios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAccesoriosController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()
    {
        $accesorios = Accesorios::latest()->paginate(5);

  

        return view('admin.accesorios.index', compact('accesorios'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {
        return view('admin.accesorios.create');
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

        Accesorios::create($request->all());

        Alert::alert('Title', 'Message', 'Type');


        return redirect()->route('accesorios.index');
    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\Accesorios  $accesorio

     * @return \Illuminate\Http\Response

     */

    public function show(Accesorios $accesorio)
    {
        return view('admin.accesorios.show', compact('accesorio'));
    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Accesorios  $accesorio

     * @return \Illuminate\Http\Response

     */

    public function edit(Accesorios $accesorio)
    {
        return view('admin.accesorios.edit', compact('accesorio'));
    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Accesorios  $accesorio

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Accesorios $accesorio)
    {


        // $request->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);

  
        $accesorio->update($request->all());

  

        return redirect()->route('accesorios.index')

                        ->with('success', 'accesorio updated successfully');
    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Paises  $paises

     * @return \Illuminate\Http\Response

     */

    public function destroy(Accesorios $paises)
    {
        $paises->delete();

  

        return redirect()->route('paises.index')

                        ->with('success', 'pais deleted successfully');
    }
}
