<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class AdminCategoryController extends Controller
{
   /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $categorys = Category::latest()->paginate(5);

  

        return view('admin.category.index',compact('categorys'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('admin.category.create');
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

        Category::create($request->all());

        return redirect()->route('category.index')

                        ->with('success','Category created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\Category  $Category

     * @return \Illuminate\Http\Response

     */

    public function show(Category $category)

    {

        return view('admin.category.show',compact('category'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Category  $Category

     * @return \Illuminate\Http\Response

     */

    public function edit(Category $category)

    {

        return view('admin.category.edit',compact('category'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Category  $Category

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Category $category)

    {

        // $request->validate([

        //     'name' => 'required',

        //     'detail' => 'required',

        // ]);

  
        $category->update($request->all());

  

        return redirect()->route('category.index')

                        ->with('success','Category updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Category  $Category

     * @return \Illuminate\Http\Response

     */

    public function destroy(Category $category)

    {

        $category->delete();

  

        return redirect()->route('category.index')

                        ->with('success','Category deleted successfully');

    }

}