<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//----------- declaracion de rutas fijas ----------------//
Route::get('/Productos',function(){
    return "Seccion de productos";
});
//----------- declaracion con parametros ----------------//

Route::get('Productos/{id}', function ($id){
    return "Bienvenido $id";
});
//----------- declaracion de rutas fijas ----------------//

Route::get('prueba parametros/{id}', function ($id){
    $d=$id;
    $nombre = explode("-",$d);
    return "tu nombre es $nombre[1]";
});