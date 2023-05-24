<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function(){
    // Consulta a BD

    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function($slug){
    // Consulta BD
    $post = $slug;
    return view('post', ['post' => $post]);
});
