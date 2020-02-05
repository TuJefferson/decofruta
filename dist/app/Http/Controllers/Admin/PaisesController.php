<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paises;


class PaisesController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $paises = Paises::latest()->paginate(5);

  

        return view('admin.paises.index',compact('paises'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('admin.paises.create');
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

        Paises::create($request->all());

        return redirect()->route('paises.index')

                        ->with('success','pais created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\Paises  $paises

     * @return \Illuminate\Http\Response

     */

    public function show(Paises $paises)

    {

        return view('admin.paises.show',compact('paises'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Paises  $paises

     * @return \Illuminate\Http\Response

     */

    public function edit(Paises $paises)

    {

        return view('admin.paises.edit',compact('paises'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Paises  $paises

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Paises $paises)

    {


        // $request->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);

  
        $paises->update($request->all());

  

        return redirect()->route('paises.index')

                        ->with('success','pais updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Paises  $paises

     * @return \Illuminate\Http\Response

     */

    public function destroy(Paises $paises)

    {
        
        $paises->delete();

  

        return redirect()->route('paises.index')

                        ->with('success','pais deleted successfully');

    }

}