<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [Auth\RegistroController::class, 'formularioRegistro']);
Route::post('/registro', [Auth\RegistroController::class, 'guardarRegistro']);

Auth::routes();  //Crea las rutas necesarias para el registro, login y logout.

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
