<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(User $user) {

        // dd($request->header());
        return view('user', [
            'user' => $user //cada item do array vai se transformar em uma variavel la na view
        ]);
    }
}
