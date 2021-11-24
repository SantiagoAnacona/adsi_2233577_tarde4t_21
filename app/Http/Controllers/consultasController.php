<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;
use App\Models\reservas;

class consultasController extends Controller
{
    public function consultas(){

        $consulta = clients::join('reservas','clients.id','=','reservas.id')
        ->select('clients.id','clients.nombre','reservas.fecha as ha reservado el')

        ->get();
        return $consulta;
    }
}
