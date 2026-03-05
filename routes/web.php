<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/testimoni', function () {
    return view('landing.testimoni.index');
})->name('testimoni');
