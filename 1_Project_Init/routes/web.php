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
    $title = 'Home';
    return view('home', compact('title'));
})->name('home');

Route::get('blog', function(){
    $title = 'Blog';
    // Consulta a BD

    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts], compact('title'));
})->name('blog');

Route::get('blog/{slug}', function($slug){
    $title = 'Blog Personal';
    // Consulta BD
    $post = $slug;
    return view('post', ['post' => $post], compact('title'));
})->name('post');
