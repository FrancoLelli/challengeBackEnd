<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
    protected $fillable = ['nombreActor', 'nacionalidadActor', 'DniActor', 'IdPeliculas', 'idSeries'];

    public function movie(){
        return $this->hasMany('App\Models\Pelicula');
    }

    public function serie(){
        return $this->hasMany('App\Models\Serie');
    }

}
