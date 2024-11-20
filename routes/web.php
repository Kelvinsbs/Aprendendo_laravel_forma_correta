<?php

use App\Models\User;
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
// Route::get('/user/{user:email}', function (User $user) { // tem como dizer para o laravel por qual campo ele deve pesquisar
Route::get('/user/{user}', function (User $user) { // se nao passar nada, ele por padrao vai pesquisar por id
    return $user;
});

Route::prefix('usuarios')->group(function() {
    Route::get('/', function () {
        return 'usuarios';
    })->name("usuario");
    Route::get('/{id}', function () {
        return "mostrar Detalhes";
    })->name("usuarios.show");
    Route::get('/{id}/tags', function () {
        return "Tags do usuario";
    })->name("usuarios.tags");
    Route::get('/edit', function () {
        return 'edit';
    })->name("usuarios.edit");
});

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) { // os nomes aqui podem ser diferentes
    return $paramA . ' - ' . $paramB;
    // return ['Laravel' => app()->version()];
});

Route::get('/a-empresa/{string?}', function ($string = null) { // passar uma "?" no final da variavel entre "{}"  faz com que ela seja opcional
    return $string;
    // return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';
