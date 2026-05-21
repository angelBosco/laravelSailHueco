<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return "<h1>Hola Mundo</h1>";
});

Route::get('/equipo', function () {
    return "<h1>El equipo de Juan es el Madrid</h1>";
});