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



Route::get('/actors', 'ActorsController@index');
Route::get('/actors/{id}', 'ActorsController@show');

Route::get('/moviesjavier', function () {
	$movies =  App\Movie::where('title', 'LIKE', '%a%');
	$desc = true;
	if ($desc) {
		$movies = $movies->orderBy('title', 'asc');
	}else{
		$movies = $movies->orderBy('title', 'desc');
	}

	return $movies->get();
});

Route::get('/ahora', 'MoviesController@ahora');
Route::get('/ahora2', 'MoviesController@ahora2');


Route::get('/test', function () {
	echo "<link href='/css/app.css' rel='stylesheet'>";
	echo "<h1>Listado de películas</h1>";
	echo "<ul>";
	foreach ($this->movies as $movie) {
		echo "<li>" . $movie['title'] . ' - ' . $movie['genre'] . '</li>';
		echo "<img src='/{$movie['poster']}' width='100'>";
		$titulo=$movie['title'];
		echo "<a href=\"pelicula/$titulo\">Ver pelicula</a>";
	}
	echo "</ul>";
});

Route::get('/pelicula/{name}', function ($titulo) {
	echo "<link href='/css/app.css' rel='stylesheet'>";
	echo "<h1>Listado de películas</h1>";
	echo "<ul>";
	foreach ($this->movies as $movie) {
		if ($movie['title']==$titulo) {
			echo "<li>" . $movie['title'] . ' - ' . $movie['genre'] . '</li>';
			echo "<img src='/{$movie['poster']}' width='100'>";
			break;
		}
		if ($movie['title']!=$titulo) {
			continue;
			echo "La pelicula no existe";
		}
	}

	echo "</ul>";
});

Route::get('/resultado/{cifra}/{cifra2?}', function ($numero, $numero2) {
	$resultado=$numero*$numero2;
	echo $resultado;
	echo "</br>";
	if ($resultado%2==0) {
			echo "Par";
	}
	else {
		echo "Impar";
	}
});

Route::get('/movies', function () {
	dd(['Avatar', 'Titanic']);
});

Route::get('/hello/{name}/{lastname?}', function ($name, $lastname = null) {
	if ($lastname) {
		return 'Hello ' . $name . ' ' . $lastname;
	}

	return 'Hello ' . $name . ' sin apellido.';
});

Route::get('/movies/titles', function () {
	return 'Titles de movies';
});

Route::get('/saludoMama', function () {
	$alumnos = ['Dai', 'Dani', 'Ale', 'Fede'];
	dd($alumnos);
});


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

Route::get('/inicio', function () {
    return view('registro.inicio');
});

Route::get('/fotografia', function () {
    return view('fotografia.fotografia');
});

Route::delete('/user/{id}', 'users@destroy');
