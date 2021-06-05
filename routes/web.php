<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
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
    return view('home');
});

Auth::routes();

Route::resource('preguntasl',App\Http\Controllers\PreguntaslController::class)->middleware('auth');

Route::resource('preguntasm',App\Http\Controllers\PreguntasmController::class)->middleware('auth');

Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'index']);

Route::get('fisica', [App\Http\Controllers\FisicaController::class, 'index'])->middleware('auth');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('lengua', [App\Http\Controllers\LenguaController::class, 'index'])->middleware('auth');

Route::get('matematicas', [App\Http\Controllers\MatematicasController::class, 'index'])->middleware('auth');

Route::get('perfil', [App\Http\Controllers\PerfilController::class, 'index'])->middleware('auth');

Route::get('profesores', [App\Http\Controllers\ProfesorController::class, 'index'])->middleware('auth');

Route::get('welcome', [App\Http\Controllers\WelcomeController::class, 'index']);


Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

