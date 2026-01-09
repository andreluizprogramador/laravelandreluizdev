<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/contato', function () {
    return view('contato');
});
