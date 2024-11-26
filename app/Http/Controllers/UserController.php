<?php

namespace App\Http\Controllers;

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
