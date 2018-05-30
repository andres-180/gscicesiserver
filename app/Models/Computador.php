<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    protected $table = 'computadores';

    protected $fillable = ['idComputador', 'sala_id', 'estado', 'last_connection'];

    public function sala()
    {
        return $this->belongsTo('App\Models\Sala');
    }
}
