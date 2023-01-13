<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CondicaoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ArmaController;
use App\Http\Controllers\OcorrenciaController;
use App\Http\Controllers\CarrocheckController;
use App\Http\Controllers\MunicaoController;
use App\Http\Controllers\GuardaController;
use App\Http\Controllers\OcupanteController;

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
    return view('/home');
});

Route::resource('/condicao', CondicaoController::class);
Route::resource('/municao', MunicaoController::class);
Route::resource('/veiculo', VeiculoController::class);
Route::resource('/arma', ArmaController::class);
Route::resource('/ocorrencia', OcorrenciaController::class);
Route::resource('/carrocheck', CarrocheckController::class);
Route::resource('/guarda', GuardaController::class);
Route::resource('/ocupante', OcupanteController::class);
