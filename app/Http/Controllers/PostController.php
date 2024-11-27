<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return post::all();
    }

    public function show(Post $post) {

        // dd($post->user);
        // $post->load('user'); //carregue a relacao de usuario
        return $post;
    }
}
