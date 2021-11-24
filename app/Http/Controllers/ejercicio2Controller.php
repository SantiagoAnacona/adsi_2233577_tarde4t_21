<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio2Controller extends Controller
{
    public function index(){
        return view('ejercicio2');
    }
    public function ejercicio2(Request $request){
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $numero3 = $request->numero3;
        $respuesta = $numero1 + $numero2 + $numero3;

        if($respuesta == $numero3){
            echo "Los Numeros Iguales";
        }else if (($numero1 + $numero3) == $numero3){
            echo "Los Numeros Iguales";
        }else if (($numero2 + $numero3) == $numero1){
            echo "Los Numeros Iguales";
        }else{
            echo "Son Diferentes";
        }

        return view('resul_ejercicio2', compact('respuesta'));


    }
}
