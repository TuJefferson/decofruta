<?php

// use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Routes dependencias
|--------------------------------------------------------------------------
|
| Funciones reutilizables
|
*/

// Route::bind('product', function($slug){
// 	return App\Product::where('slug',$slug)->first();
// });

Route::bind('paises', function ($id) {
    return App\Paises::where('active', 1)->get();
});


// Route::bind('user', function ($value) {
//     return App\User::where('name', $value)->firstOrFail();
// });






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// ejemplos
// Route::get('hola', function(){
// 	return 'hola tu ';
// });

// Route::get('usuario/{nombre?}', function($nombre='Invitado'){
// 	return 'Usuario '.$nombre;
// });

// Route::get('usuario/{nombre?}/comentario/{comentarioid?}', function($nombre='Invitado', $comentario='no hay comentario'){
// 	return 'Usuario '.$nombre. ' y el comentarioes '. $comentario;
// });

// Route::get('user/{nombre}', function($nombre){
// 	return 'Usuario '.$nombre;
// })->where('nombre', '[A-Za-z]+');

// Route::get('user1/{id}', function($id){
// 	return 'Usuario '.$id;
// })->where('id', '[0-9]+');

// Route::get('user2/{id}/{nombre}', function($id, $nombre){
// 	return 'Usuario '.$id. ' y el nombre es ' .$nombre;
// })->where(['id' => '[0-9]+', 'nombre' => '[A-Za-z]+']);




Route::resource('agenda', 'AgendaController');


/*
|--------------------------------------------------------------------------
| Routes principales
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', ['as' => 'home', 'uses' => 'StoreController@indexstore']);

Route::get('productos', ['as' => 'ver-todos', 'uses' => 'ProductsController@vertodos']);

Route::get('categoria/{id}', ['as' => 'ver-categoria', 'uses' => 'ProductsController@vercategoria']);

Route::get('temporada/{id}', ['as' => 'ver-temporada', 'uses' => 'ProductsController@vertemporada']);

Route::get('product/{slug}', ['as' => 'product-detail', 'uses' => 'StoreController@showstore']);


/*
|--------------------------------------------------------------------------
| Routes contacto
|--------------------------------------------------------------------------
*/
Route::get('contacto', 'ContactoController@contacto')->name('contacto');


/*
|--------------------------------------------------------------------------
| Routes email
|--------------------------------------------------------------------------
*/
// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('prioridad.25@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });


/*
|--------------------------------------------------------------------------
| Routes inicia sesion con goolge
|--------------------------------------------------------------------------
*/
// Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
// Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');


/*
|--------------------------------------------------------------------------
| Routes lenguaje
|--------------------------------------------------------------------------
*/
Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');



Route::match(['get', 'post'], '/botman', 'BotManController@handle');



/*
|--------------------------------------------------------------------------
| Routes carrito
|--------------------------------------------------------------------------
*/

Route::post('agregar', ['as' => 'agregar', 'uses' => 'CarritoController@agregarcarrito']);





// mostrar
Route::get('cart', 'CarritoController@showcarrito')->name('cart-show');
// agregar
Route::post('add-to-cart', 'CarritoController@addcarrito')->name('cart-add');

Route::get('remove-to-cart/{id}', 'CarritoController@deletecarrito')->name('cart-delete');

Route::get('empty-to-cart', ['as' => 'cart-empty', 'uses' => 'CarritoController@emptycarrito']);

// Route::get('update-to-cart/{id}/quantity', ['as' => 'cart-update', 'uses' => 'CarritoController@updatecarrito']);

Route::patch('update-cart', 'ProductsController@update');



/*
|--------------------------------------------------------------------------
| Routes GUATEMALA
|--------------------------------------------------------------------------
*/
//home guatemal
// Route::get('/guatemala', function () {
//     return view('guatemala.tienda.template');
// });


Route::get('/guatemala', ['as' => 'home-guatemala', 'uses' => 'Guatemala\G_StoreController@indexstoreguatemala']);




/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
*/

//home
Route::get('admin', function () {
    return view('admin.home');
});

// category
Route::resource('admin/category', 'Admin\AdminCategoryController');


//productos
Route::resource('admin/products', 'Admin\ProductController');

// paises
Route::resource('admin/paises', 'Admin\PaisesController');

// monedas
Route::resource('admin/monedas', 'Admin\MonedaController');

// accesorios
Route::resource('admin/accesorios', 'Admin\AdminAccesoriosController');
