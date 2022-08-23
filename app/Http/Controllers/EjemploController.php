<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Ejemplo;


class EjemploController extends Controller
{
    public function MostrarListado(Request $request){
        $Ejemplos = Ejemplo::all();
        return view('VistaDeEjemplo',["Ejemplos" => $Ejemplos]);
    }

    public function MostrarJson(Request $request){
        $Ejemplos = Ejemplo::all();
        return $Ejemplos;
    }
}
