<?php

use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/request', function (Request $request) {

    // $r = $request->all(); // traz tudo
    // $r = $request->query(); // mesma coisa q o de cima
    // $r = $request->input('keyword'); // traz apenas o conteudo
    // $r = $request->path(); // traz o "/request
    // $r = $request->url(); // traz a url do sistema
    // $r = $request->fullUrl(); // traz a url do sistema com a query string
    // $r = $request->header(); //traz todos os headers
    // $r = $request->has('keyword'); // ja faz a propria validacao do campo
    // $r = $request->whenHas( 'keyword', function($input) {
    //     dd('x', $input);
    // });
    // $r = $request->whenFilled( 'keyword', function($input) {
    //     dd('x', $input);
    // }); // vai fazer a funcao apenas quando a querystring estiver preenchida
    // $r = $request->ip(); // traz o ip do sistema

    // if ($r) {
    //     dd("Faça alguma coisa");
    // }
    dd($r);
    return 'x';
});

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
