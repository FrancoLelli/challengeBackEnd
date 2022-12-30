<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSerie(){
        return response()->json(Serie::all(), 200);
    }

    //Search by Id
    public function getSerieId($id){
        $serie = Serie::find($id);
        if(is_null($serie)){
            return response()->json(['message'=>'Registro no encontrado'], 404);
        }
        return response()->json($serie, 200);
    }

    public function insertSerie(Request $request){
        $serie = Serie::create($request->all());
        if(is_null($serie)){
            return response()->json(['message' => 'Hubo problemas con el registro'], 404);
        }
        return response()->json($serie, 200);
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
