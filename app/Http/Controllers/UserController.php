<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index () {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function show(User $user) {

        // $user->teams()->attach([1, 3]); // insere na tabela pivot
        // $user->teams()->sync([2, 3]); // sincroniza os dados na tabela pivot (caso tenha registros repetidos)
        // $user->teams()->syncWithoutDetaching(2); // sincroniza os dados sem remover os registros antigos
        // $user->teams()->detach([1,3]); // remove os itens 1 e 3 da tabela pivot

        // $user->load('teams');
        // return $user;

        $team = Team::find(1);
        $team->load('users');

        return $team;

        $user->posts()->create([
            'title' => 'Meu primeiro post',
            'content' => 'Isso é um post'
        ]);

        // $user->posts()->delete();

        dd($user->posts);

        // dd($request->header());
        return view('user', [
            'user' => $user //cada item do array vai se transformar em uma variavel la na view
        ]);
    }
}
