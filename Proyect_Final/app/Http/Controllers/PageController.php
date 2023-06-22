<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $title = 'Home';
        $posts = Post::latest()->paginate();

        return view('home', ['posts' => $posts, 'title' => $title]);
    }

    // public function blog()
    // {
    //     $title = 'Blog';
    //     // Consulta a BD

    //     // $posts = Post::get();
    //     // $posts = Post::first();
    //     // $post = Post::find(25);

    //     // dd($post);

    //     // Datos paginados
    //     $posts = Post::latest()->paginate();
    //     // Codigo quemado
    //     // $posts = [
    //     //     ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
    //     //     ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel']
    //     // ];

    //     return view('blog', ['posts' => $posts], compact('title'));
    // }

    public function post(Post $post)
    {
        $title = 'Blog Personal';
        // Consulta BD
        // $post = $slug;
        return view('post', ['post' => $post], compact('title'));
    }
}
