<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPelicula(){
        return response()->json(Pelicula::all(), 200);
    }

    //Search by Id
    public function getPeliculaId($id){
        $pelicula = Pelicula::find($id);
        if(is_null($pelicula)){
            return response()->json(['message'=>'Registro no encontrado'], 404);
        }
        return response()->json([$pelicula, $pelicula->director->nombreDirector], 200);
    }
    
    //Order By
    public function ordenarPelicula($campo){
        $pelicula = DB::table('peliculas')
                ->orderBy($campo, 'desc')
                ->get();

        if(is_null($pelicula)){
            return response()->json(['message' => 'Hubo problemas con el registro'], 404);
        }
        
        return response()->json($pelicula, 200);
    }

    public function insertPelicula(Request $request){
        $pelicula = Pelicula::create($request->all());
        if(is_null($pelicula)){
            return response()->json(['message' => 'Hubo problemas con el registro'], 404);
        }
        return response()->json($pelicula, 200);
    }


    public function updatePelicula(Request $request, $id){
        $pelicula = Pelicula::find($id);
        if(is_null($pelicula)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $pelicula->update($request->all());
        return response()->json($pelicula, 200);
    }

    public function deletePelicula($id){
        $pelicula = Pelicula::find($id);
        if(is_null($pelicula)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $pelicula->delete();
        return response()->json(['message' => "Registro Eliminado"], 200);
    }
}

