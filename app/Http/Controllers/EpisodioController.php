<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episodio;

class EpisodioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEpisodio(){
        return response()->json(Episodio::all(), 200);
    }

    //Search by Id
    public function getEpisodioId($id){
        $episodio = Episodio::find($id);
        if(is_null($episodio)){
            return response()->json(['message'=>'Registro no encontrado'], 404);
        }
        return response()->json([$episodio, $episodio->director->nombreDirector, $episodio->serie->nombreSerie], 200);
    }

    public function insertEpisodio(Request $request){
        $episodio = Episodio::create($request->all());
        if(is_null($episodio)){
            return response()->json(['message' => 'Hubo problemas con el registro'], 404);
        }
        return response()->json($episodio, 200);
    }

    public function updateSerie(Request $request, $id){
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $serie->update($request->all());
        return response()->json($serie, 200);
    }

    public function deleteSerie($id){
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $serie->delete();
        return response()->json(['message' => "Registro Eliminado"], 200);
    }
}
