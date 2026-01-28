<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function () {
    return view('create');
});

Route::get('/kars', function () {
    return view('kars');
});

Route::get('/kamesh', function () {
    return view('kamesh');
});