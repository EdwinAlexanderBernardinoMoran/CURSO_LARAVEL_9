<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }

    public function blog()
    {
        $title = 'Blog';
        // Consulta a BD

        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel']
        ];

        return view('blog', ['posts' => $posts], compact('title'));
    }

    public function post($slug)
    {
        $title = 'Blog Personal';
        // Consulta BD
        $post = $slug;
        return view('post', ['post' => $post], compact('title'));
    }
}
