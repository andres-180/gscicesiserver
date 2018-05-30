<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function actualizarFechaComputador(Request $request)
    {
        $idsala = $request -> idsala;
        $idpc = $request -> idpc;
        $fecha = $request -> fecha;
        return "Identificación sala: " . $idsala . "\nIdentificación PC: " . $idpc . "\nFecha actual: " . $fecha;
    }
}
