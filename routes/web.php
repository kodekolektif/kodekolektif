<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});


Route::get('/about', function () {
    return view('app');
});