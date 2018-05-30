<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $computador = DB::table('computadores')->where([
            ['sala_id', '=', $idsala],
            ['idComputador', 'LIKE', $idpc],
        ]);
        //$computador -> last_connection = \Carbon\Carbon::now();
        //$computador -> save();

        if (is_null($computador))
        {
            return "el computador si es nullo";
        }
        else
        {
            return "el computador no es nullo";
        }

    }
}
