<?php

namespace App\Http\Controllers\Api;

use App\Models\Computador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

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
        $fecha = Carbon::now();
        $computador = DB::table('computadores')->where([
            ['sala_id', '=', $idsala],
            ['idComputador', '=', $idpc],
        ])->update(['last_connection' => $fecha, 'estado' => "no disponible"]);

        $computador = DB::table('computadores')->where([
            ['sala_id', '=', $idsala],
            ['idComputador', '=', $idpc],
        ])->first();

        return $computador -> last_connection;

    }

    public function actualizarEstados()
    {
        $computadores = Computador::all();
        $cadena = "";
        $fechaActual = Carbon::now();
        foreach ($computadores as $computador)
        {
            $fechaComputador = Carbon::createFromTimestamp($computador -> last_connection);
            $diferencia = $fechaActual->diffInSeconds($fechaComputador);
            if($diferencia > 10)
            {
                $computador -> estado = "disponible";
                $computador -> save();
            }
        }
        return $cadena;
    }
}
