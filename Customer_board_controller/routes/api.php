<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('clientes', \App\Http\Controllers\Api\ClientesController::class);
Route::get('/clientes/{cliente}/funcionarios', function (\App\Models\Cliente $cliente){
    return $cliente->funcionarios;
});

Route::apiResource('equipes', \App\Http\Controllers\api\EquipesController::class);
Route::get('/equipes/{equipe}/funcionarios', function(\App\Models\Equipe $equipe){
    return $equipe->funcionarios;
});

