<?php

use Spatie\Permission\Models\Role;

//Role::create(['name' => 'admin']);
//Role::create(['name' => 'lector']);

use Spatie\Permission\Exceptions\RoleAlreadyExists;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use illuminate\Routing\Controller;
use illuminate\Routing\Router;
use Illuminate\Routing\RouteFileRegistrar;


Route::view('/', 'welcome');
//lista de categorias
Route::get('/sugerencia', [App\Http\Controllers\FrontController::class, 'index']);
//lista de post de una categoria
Route::get('/sugerencia/{sugerencia}', [App\Http\Controllers\FrontController::class, 'sugerencia']);
//lista de comentarios POST
Route::get('/sugerencia/{sugerencia}/{post}', [App\Http\Controllers\FrontController::class, 'post']);

Route::get('/aboutme',  [App\Http\Controllers\Aboutme::class]);
Route::view('/aboutme', 'Aboutme');


Route::post('dashnoard/logout', [App\Http\Controllers\HomeController::class, 'index'])->name('logout');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::resource('sugerencia', App\Http\Controllers\Admin\SugerenciasController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
    Route::resource('comentarios', App\Http\Controllers\Admin\ComentariosController::class);
    Route::resource('aboutme', App\Http\Controllers\Aboutme::class);
});
Route::group(['prefix' => 'admin', 'middleware' => ['role:lector']], function () {

    Route::post('{post}/comentario', [App\Http\Controllers\Lector\ComentariosController::class, 'store'])->name('store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
