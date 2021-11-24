<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio1Controller extends Controller
{
    public function index(){
        return view('ejercicio1');
    }
    public function ejercicio1(Request $request){
        $numero1 = $request -> numero1;
        $numero2 = $request -> numero2;


        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;

        return view('resul_ejercicio1', compact('suma', 'resta', 'multiplicacion', 'division'));
    }
}
