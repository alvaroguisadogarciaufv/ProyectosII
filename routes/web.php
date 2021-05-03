<?php

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
    return view('auth.login');
});

Auth::routes();

Route::resource('usuarios',App\Http\Controllers\UsuarioController::class)->middleware('auth') ;

Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');

Route::get('fisica', [App\Http\Controllers\FisicaController::class, 'index'])->name('fisica');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lengua', [App\Http\Controllers\LenguaController::class, 'index'])->name('lengua');

Route::get('matematicas', [App\Http\Controllers\MatematicasController::class, 'index'])->name('matematicas');

Route::get('perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

Route::get('profesores', [App\Http\Controllers\ProfesorController::class, 'index'])->name('profesores');

Route::get('RespuestasMat', [App\Http\Controllers\RespuestasMatController::class, 'index'])->name('RespuestasMat');

