<?php

use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CondicaoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ArmaController;
use App\Http\Controllers\OcorrenciaController;
use App\Http\Controllers\CarrocheckController;
use App\Http\Controllers\MunicaoController;
use App\Http\Controllers\GuardaController;
use App\Http\Controllers\OcupanteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;


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
})->middleware(Autenticador::class);

Route::resource('/condicao', CondicaoController::class)->middleware(Autenticador::class);
Route::resource('/municao', MunicaoController::class)->middleware(Autenticador::class);
Route::resource('/veiculo', VeiculoController::class)->middleware(Autenticador::class);
Route::resource('/arma', ArmaController::class)->middleware(Autenticador::class);
Route::resource('/ocorrencia', OcorrenciaController::class)->middleware(Autenticador::class);
Route::resource('/carrocheck', CarrocheckController::class)->middleware(Autenticador::class);
Route::resource('/guarda', GuardaController::class)->middleware(Autenticador::class);
Route::resource('/ocupante', OcupanteController::class)->middleware(Autenticador::class);
Route::get('/login', [LoginController::class, 'index'])->name(name: 'login');
Route::post('/login', [LoginController::class, 'store'])->name(name: 'signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name(name: 'logout');

Route::get('/register', [UsersController::class, 'create'])->name(name: 'users.create');
Route::post('/register', [UsersController::class, 'store'])->name(name: 'users.store');
