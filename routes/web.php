<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function (){
    return view('about', ['title' => 'About'] );
});

// Tugas Pak Sandhika Galih
// Bikin rute halaman /blog dan bikin 2 artikel dengan judul dan isi
Route::get('/blog', function (){
    return view('blog', ['title' => 'Blog']);
}); 

// Bikin rute kontak
Route::get('/contact', function (){
    return view('contact', [
        'title' => 'Contact',
        'ig' => '@prima.yudhistira',
        'email' => 'primayudhistira040@gmail.com' 
    ]);
});