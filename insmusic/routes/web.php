<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/index','/inicio');
Route::view('/contactos', '/contacto');
Route::view('/Instrumentos', '/productos');
Route::view('/dudas', '/preguntas');
Route::view('/categorias', '/tipos');