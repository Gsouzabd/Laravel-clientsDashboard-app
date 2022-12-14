<?php

use App\Http\Controllers\Api\ClientesController as ApiClientesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
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
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/home', [LoginController::class, 'home'])->name('home')->middleware(Autenticador::class);
Route::post('/login/store', [LoginController::class, 'store'])->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::resource('/users', UsersController::class)->except('index', 'destroy');

Route::resource('/clientes', ClientesController::class)->except('show')->middleware(Autenticador::class);
Route::resource('/equipes', EquipesController::class)->middleware(Autenticador::class);
Route::resource('/funcionarios', FuncionariosController::class)->middleware(Autenticador::class);




