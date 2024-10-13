<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('profil');
});

Route::get('/', function () {
    return view('about');
});

Route::get('/', function () {
    return view('skill');
});

Route::get('/', function () {
    return view('project');
});
