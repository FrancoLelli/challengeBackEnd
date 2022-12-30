<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $fillable = ['nombreDirector', 'nacionalidadDirector', 'DniDirector'];

    public function movie(){
        return $this->belongsTo('App\Models\Pelicula');
    }

    public function serie(){
        return $this->belongsTo('App\Models\Serie');
    }

    public function episodio(){
        return $this->belongsTo('App\Models\Episodio');
    }
    
}
