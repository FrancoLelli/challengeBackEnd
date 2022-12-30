<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = ['nombrePelicula', 'idDirector', 'generoPelicula'];

    public function director(){
        return $this->hasOne(Director::class, 'id', 'idDirector');
    }

}
