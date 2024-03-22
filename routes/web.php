<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/post2', function () {
    return view('post2');
});

Route::get('posts/{slug}', function ($slug) {
    $path = resource_path("index/{$slug}.html");

    if (!file_exists($path)) {
        return redirect('/');
    }

    $postContent = file_get_contents($path);

    return view('post', [
        'postContent' => $postContent,
    ]);
});