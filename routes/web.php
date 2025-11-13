<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function (){
    return view('about', ['title' => 'About'] );
});

// Tugas Pak Sandhika Galih
// Bikin rute halaman /blog dan bikin 2 artikel dengan judul dan isi
Route::get('/posts', function (){
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::all()
        
    ]);
});

Route::get('/posts/{slug}', function($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Bikin rute kontak
Route::get('/contact', function (){
    return view('contact', [
        'title' => 'Contact',
        'ig' => '@prima.yudhistira',
        'email' => 'primayudhistira040@gmail.com' 
    ]);
});