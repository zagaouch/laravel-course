<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/posts/{id}/{author?}',function($id,$author = 'admin'){

    $posts=[
        1 => ['title' => 'learn java'],
        2 => ['title' => 'leran art ']
    ];
    return view('posts.show',[
        'data' => $posts[$id],
        'author' => $author
    ]);

});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
