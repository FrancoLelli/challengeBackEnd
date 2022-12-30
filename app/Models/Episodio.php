<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    use HasFactory;
    protected $fillable = ['idSeries', 'nombreEpisodio', 'temporadaEpisodio', 'numeroEpisodio', 'idDirectorEP'];

    
    public function director(){
        return $this->hasOne(Director::class, 'id', 'idDirectorEP');
    }

    public function serie(){
        return $this->hasOne(Serie::class, 'id', 'idSeries');
    }

}
