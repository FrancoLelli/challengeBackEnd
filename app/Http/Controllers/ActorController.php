<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getActor(){
        return response()->json(Actor::all(), 200);
    }

    //Search by Id
    public function getActorId($id){
        $actor = Actor::find($id);
        if(is_null($actor)){
            return response()->json(['message'=>'Registro no encontrado'], 404);
        }
        return response()->json($actor, 200);
    }

    public function insertActor(Request $request){
        $actor = Actor::create($request->all());
        if(is_null($actor)){
            return response()->json(['message' => 'Hubo problemas con el registro'], 404);
        }
        return response()->json($actor, 200);
    }

    public function updateActor(Request $request, $id){
        $actor = Actor::find($id);
        if(is_null($actor)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $actor->update($request->all());
        return response()->json($actor, 200);
    }

    public function deleteActor($id){
        $actor = Actor::find($id);
        if(is_null($actor)){
            return response()->json(['message' => 'Registro no encontrado'], 484);
        }
        $actor->delete();
        return response()->json(['message' => "Registro Eliminado"], 200);
    }
}
