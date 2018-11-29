<?php

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
    return view('welcome');
});
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
