<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio3Controller extends Controller
{
    public function index(){
        return view('ejercicio3');
    }
    public function ejercicio3(Request $request){
        $nombre = $request->nombre;
        $salario = $request->salario;
        $horas = $request ->horas;

        $bono = $salario * 0.3 * $horas;
;

        if ($horas >= 50){
            echo "Su total de salario incremento:";
        }else {
            echo "Su total de salario no incremento";
        }


        return view('resul_ejercicio3', compact('nombre', 'horas', 'bono'));
    }
}
