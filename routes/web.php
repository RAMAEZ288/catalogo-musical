<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

# Redirigir la raíz a /index (si prefieres que / muestre la vista inicio, cambia esto)
Route::redirect('/', '/index');

Route::view('/index', 'inicio');
Route::view('/contacto', 'contacto');
Route::view('/dudas', 'preguntas');
Route::view('/categorias', 'tipos');
Route::view('/nosotros', 'nosotros');
Route::view('/carrito', 'carrito');

// Productos: leer la lista centralizada en config/products.php
Route::get('/Instrumentos', function(Request $request) {
    $productos = config('products.list', []);

    $categoria = $request->query('categoria', null);
    if ($categoria) {
        $productos = array_values(array_filter($productos, fn($p) => ($p['slug'] ?? '') === $categoria));
    }

    return view('productos', ['productos' => $productos]);
});

// Detalle dinámico: pasar producto desde config
Route::get('/detalleins/{id}', function($id) {
    $productos = config('products.list', []);
    if (!isset($productos[$id])) {
        abort(404);
    }
    $producto = $productos[$id];
    return view('detalleins', ['producto' => $producto]);
});

// Carrito (session)
Route::post('/carrito/agregar', function(Request $request){
    $producto = $request->input('producto');
    $carrito = session()->get('carrito', []);
    $carrito[] = $producto;
    session(['carrito' => $carrito]);
    return redirect('/carrito');
});