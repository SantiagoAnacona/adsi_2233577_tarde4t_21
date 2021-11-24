<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio5Controller extends Controller
{
    public function index(){
        return view('ejercicio5');
    }
    public function ejercicio5(Request $request){
        $radio = $request ->radio;
        $altura = $request ->altura;
        $pi= 3.1416;
        $volumen = $pi * ($radio^2)*$altura;
        $area = 2 * $pi * $radio * ($radio+$altura);
        return view('resul_ejercicio5', compact('volumen', 'area'));
    }
}
