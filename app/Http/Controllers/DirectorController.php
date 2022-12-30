<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $directores = Director::all();
    //     return $directores;
    // }

    //View All
    public function getDirector(){
        return response()->json(Director::all(), 200);
    }

    //Search by Id
    public function getDirectorId($id){
        $director = Director::find($id);
        if(is_null($director)){
            return response()->json(['message'=>'Registro no encontrado'], 404);
        }
        return response()->json($director, 200);
    }

    public function insertDirector(Request $request){
        $director = Director::create($request->all());
        if(is_null($director)){
            return response()->json(['message' => 'Hubo problemas con el registro'], 404);
        }
        return response()->json($director, 200);
    }

    public function updateDirector(Request $request, $id){
        $director = Director::find($id);
        if(is_null($director)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $director->update($request->all());
        return response()->json($director, 200);
    }

    public function deleteDirector($id){
        $director = Director::find($id);
        if(is_null($director)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $director->delete();
        return response()->json(['message' => "Registro Eliminado"], 200);
    }
}
