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

Route::resource('usuarios',App\Http\Controllers\UsuarioController::class)->middleware('auth');

Route::get('contacto', [App\Http\Controllers\ContactoController::class, 'index']);

Route::get('fisica', [App\Http\Controllers\FisicaController::class, 'index'])->middleware('auth');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('lengua', [App\Http\Controllers\LenguaController::class, 'index'])->middleware('auth');

Route::get('matematicas', [App\Http\Controllers\MatematicasController::class, 'index'])->middleware('auth');

Route::get('perfil', [App\Http\Controllers\PerfilController::class, 'index'])->middleware('auth');

Route::get('profesores', [App\Http\Controllers\ProfesorController::class, 'index'])->middleware('auth');

Route::get('RespuestasMat', [App\Http\Controllers\RespuestasMatController::class, 'index'])->middleware('auth');

Route::resource('tags', TagController::class)->names('admin.tags');

//Route::get('tags', ChatsController::class);

Route::get('chat', [App\Http\Controllers\ChatsController::class, 'index']);

Route::get('welcome', [App\Http\Controllers\WelcomeController::class, 'index']);

//Route::resource('thread', [App\Http\Controllers\ThreadController::class, 'index']);

//Route::resource('/thread', 'App\Http\Controllers\ThreadController');

Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');


/*


Route::get('/', function () {
    $threads=App\Thread::paginate(15);
    return view('welcome',compact('threads'));
});

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('welcome', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('thread/search',[App\Http\Controllers\ThreadController::class, 'index']);

Route::post('/thread/mark-as-solution',[App\Http\Controllers\ThreadController::class, 'index'])->name('markAsSolution');
Route::resource('/thread',[App\Http\Controllers\ThreadController::class, 'index']);


Route::resource('comment','CommentController',['only'=>['update','destroy']]);

Route::post('comment/create/{thread}','CommentController@addThreadComment')->name('threadcomment.store');

Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');


Route::post('comment/like','LikeController@toggleLike')->name('toggleLike');

Route::get('/user/profile/{user}', [App\Http\Controllers\ThreadController::class, 'index'])->name('user_profile')->middleware('auth');

Route::get('/markAsRead',function(){
    auth()->user()->unreadNotifications->markAsRead();
});

 */