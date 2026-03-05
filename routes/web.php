<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/testimoni', function () {
    return view('landing.testimoni.index');
})->name('testimoni');

Route::get('/blog', function () {
    return view('landing.blog.index');
})->name('blog');
