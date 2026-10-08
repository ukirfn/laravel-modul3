<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Selamat Pagi Dunia, [707082400140_Teuku Mulki Irfansyah]';
});