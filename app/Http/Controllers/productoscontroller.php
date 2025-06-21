<?php

namespace App\Http\Controllers;
{
class ProductosController extends Controller
{  
    public function index() {
    return view("productos.show");
    }

    public function create() {
        return "carrito activo";
    } 
    public function show($product) {
        return "El producto es $product";
    }
    public function mostrar() {
    return view('productos.show');
    }

}
}
