<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
  public function ahora(){
    echo "Hola";
  }

  public function ahora2(){
    return view('prueba');
  }
}
