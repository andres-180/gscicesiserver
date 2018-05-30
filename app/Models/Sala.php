<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';

    protected $fillable = ['idSala', 'nombre'];

    public function computadores()
    {
        return $this->hasMany('App\Models\Computador');
    }
}
