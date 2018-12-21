<?php
use App\Brand;

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
Route::get('/', function () {
	return redirect('/products');
});

Route::get('/brands', function () {
	$brands = \App\Brand::all();
   return view('brands')->with(compact('brands'));
});

Route::get('/colors', function () {
	$colors = \App\Color::all();
   return view('colors')->with(compact('colors'));
});

Route::get('/products/api', 'ProductsController@api');

// Route::get('/productos', 'ProductsController@index');
// Route::get('/productos/crear', 'ProductsController@create')->name('products.create');

Route::resource('/products', 'ProductsController');
// Route::get('/products', 'ProductsController@index');
// Route::post('/products', 'ProductsController@store');
// Route::get('/products/create', 'ProductsController@create');
// Route::get('/products/{id}', 'ProductsController@show');
// Route::put('/products/{id}', 'ProductsController@update');
// Route::delete('/products/{id}', 'ProductsController@destroy');
// Route::get('/products/{id}/edit', 'ProductsController@edit');


Route::middleware('auth')->group(function ()
{
	Route::get('/products/create', 'ProductsController@create')->name('products.create');
	Route::delete('/products/{id}', 'ProductsController@destroy')->name('products.destroy');
	Route::get('/products/{id}/edit', 'ProductsController@edit')->name('products.edit');
});

Route::resource('/products', 'ProductsController')->except(['create', 'destroy', 'edit']);

// Route::get('/products/{id}/edit', 'ProductsController@edit')->middleware('isAdmin');

// Route::get('/products', 'ProductsController@index');
// Route::post('/products', 'ProductsController@store');
// Route::get('/products/create', 'ProductsController@create');
// Route::get('/products/{id}', 'ProductsController@show');
// Route::put('/products/{id}', 'ProductsController@update');
// Route::delete('/products/{id}', 'ProductsController@destroy');
// Route::get('/products/{id}/edit', 'ProductsController@edit');

Auth::routes();

Route::get('/profile', 'Auth\LoginController@showProfile')->name('profile')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/libreria', 'UsuariosController@sitio');

Route::get('/preguntas', function () {
    return view('preguntas-frecuentes.preguntas-frecuentes');
});

Route::get('/perfil', function () {
    return view('perfil.perfil');
});

Route::get('/producto', function () {
    return view('productos.productos');
});

Route::get('/producto-libreria', function () {
    return view('productos.productos_de_libreria');
});

Route::get('/producto-diseno', function () {
    return view('productos.productos_de_diseño');
});

Route::get('/producto-madera', function () {
    return view('productos.productos_de_madera');
});

Route::get('/producto-pintura', function () {
    return view('productos.productos_de_pintura');
});

Route::get('/impresion', function () {
    return view('productos.impresiones');
});

Route::get('/registro', function () {
    return view('registro.register');
});

Route::get('/acceder', function () {
    return view('registro.login');
});

Route::get('/inicio', function () {
    return view('registro.inicio');
});

Route::get('/fotografia', function () {
    return view('fotografia.fotografia');
});
