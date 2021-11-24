<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio4Controller extends Controller
{
    public function index(){
        return view('ejercicio4');
    }
    public function ejercicio4(Request $request){

        $numero_entero = $request-> numero_entero;
        $respuesta= $numero_entero * ($numero_entero + 1)/2;

        return view('resul_ejercicio4', compact('numero_entero', 'respuesta'));
    }
}

