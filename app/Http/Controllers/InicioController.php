<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{


    public function MostrarPagInicio()
    {
        return view('welcome');
    }
    public function MostrarPagAgricultura(){
      return view('carreras/agricultura');
    }
    public function MostrarPagInformatica(){
      return view('carreras/informatica');
    }
    public function MostrarPagConservacion(){
      return view('carreras/conservacion');
    }
}
