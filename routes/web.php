<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ip', function () {
    return 'hi';
});

Route::get('/books', function () {
    return view('welcome');
});

Route::get('/dummy', function () {
    return view('welcome');
});
