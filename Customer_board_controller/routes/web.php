<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/clientes');
});

Route::resource('/clientes', ClientesController::class)->except('show');
Route::resource('/equipes', EquipesController::class);
Route::resource('/funcionarios', FuncionariosController::class);

