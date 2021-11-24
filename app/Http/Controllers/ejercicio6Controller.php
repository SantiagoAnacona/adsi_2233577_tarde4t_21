<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio6Controller extends Controller
{
    public function index(){
        return view('ejercicio6');
    }
    public function ejercicio6(Request $request){
        $Nombre = $request-> Nombre;
        $primer_parcial = $request-> primer_parcial;
        $Examen_final = $request-> Examen_final;
        $respuesta = $primer_parcial * 0.4 + $Examen_final * 0.6;
        if ($respuesta>=3.0){
            echo "APROBADO";
        }
        else{
            echo "NO APROBADO";
        }
        return view ('resul_ejercicio6', compact('Nombre', 'respuesta'));
    }

}
