<?php

namespace App\Http\Controllers\Api;

use App\Models\Computador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Response;

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
        $fecha = \Carbon\Carbon::now();
        $computador = DB::table('computadores')->where([
            ['sala_id', '=', $idsala],
            ['idComputador', '=', $idpc],
        ])->update(['last_connection' => $fecha, 'estado' => "disponible"]);

        $computador = DB::table('computadores')->where([
            ['sala_id', '=', $idsala],
            ['idComputador', '=', $idpc],
        ])->first();

        return $computador -> last_connection;

    }

    public function actualizarEstados()
    {
        $computadores = Computador::all();
        return Response::json($computadores, 200);
    }
}
