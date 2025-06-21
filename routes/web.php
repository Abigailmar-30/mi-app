<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoscontroller;
use App\Http\Controllers\indexcontroller;
// Route::get(´/´, function () {
//      return view(´welcome´);
// });
// Ruta principal usando controlador invocable
//Route::get('/', indexcontroller::class);
Route::get('/', [productoscontroller::class, 'mostrar']);

/* //----------- declaración de rutas fijas -----------
Route::get('/productos', [productoscontroller::class, 'create']);

//----------- declaración con parámetros -----------
Route::get('/productos/crear', [productoscontroller::class,'create']);
Route::get('/productos/{product}', [productoscontroller::class, 'show']); */


Route::controller(productoscontroller::class)->group (function (){
    Route::get('/productos',"index");
    Route::get('/productos/crear',"create ");
    Route::get('productos/{prod}',"show");
}); 