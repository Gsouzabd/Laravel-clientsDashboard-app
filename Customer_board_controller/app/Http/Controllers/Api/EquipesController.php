<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Equipe;
use http\Env\Response;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return $equipes;
    }

    public function show(Equipe $equipe)
    {
        $equipeModel = Equipe::with('funcionarios')->find($equipe);
        if ($equipeModel === null){
            return response()->json(['message'=> 'Equipe not found'], 404);
        }

        return $equipeModel;
    }
}
