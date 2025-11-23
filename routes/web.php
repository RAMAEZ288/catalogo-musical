<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index', 'inicio');
Route::view('/contacto', 'contacto');
Route::view('/dudas', 'preguntas');
Route::view('/categorias', 'tipos');
Route::view('/nosotros', 'nosotros');
Route::view('/carrito', 'carrito');

// Generador común de productos (la misma lógica que usas en la blade)
function generarProductosCompleto()
{
    $categorias = ['Guitarras', 'Bajos', 'Baterías', 'Teclados', 'Pedales', 'Accesorios', 'Flautas', 'Violines', 'Saxofones', 'Bongos'];

    $imgMap = [
        'Guitarras' => 'guitarra.jpg',
        'Bajos' => 'bajo.jpg',
        'Baterías' => 'bateria.jpg',
        'Teclados' => 'teclado.jpg',
        'Pedales' => 'pedal.jpg',
        'Accesorios' => 'accesorio.jpg',
        'Flautas' => 'flauta.jpg',
        'Violines' => 'violin.jpg',
        'Saxofones' => 'saxofon.jpg',
        'Bongos' => 'bongos.jpg'
    ];

    $productos = [];
    foreach ($categorias as $cat) {
        for ($i = 1; $i <= 8; $i++) {
            $nombreBase =
                $cat === 'Guitarras' ? (($i % 2 == 0) ? "Guitarra Eléctrica $i" : "Guitarra Acústica $i") :
                ($cat === 'Bajos' ? "Bajo Eléctrico $i" :
                ($cat === 'Baterías' ? "Batería Acústica $i" :
                ($cat === 'Teclados' ? "Teclado Electrónico $i" :
                ($cat === 'Pedales' ? "Pedal de Efectos $i" : "$cat $i"))));

            $productos[] = [
                'img' => $imgMap[$cat] ?? 'placeholder.jpg',
                'nombre' => $nombreBase,
                'categoria' => $cat,
                'slug' => strtolower(str_replace(' ', '-', $cat))
            ];
        }
    }

    return $productos;
}

// Lista de productos (catálogo) — ahora usa la misma fuente de datos
Route::get('/Instrumentos', function(Request $request) {
    $productos = generarProductosCompleto();

    // Si en el futuro quieres filtrar por categoría con query ?categoria=...
    $categoria = $request->query('categoria', null);
    if ($categoria) {
        $productos = array_filter($productos, fn($p) => strtolower($p['slug']) === strtolower($categoria));
        // array_filter preserva keys: reindexamos para que los índices vayan 0,1,2...
        $productos = array_values($productos);
    }

    return view('productos', ['productos' => $productos]);
});

// Ruta de detalle: usa la misma lista de productos
Route::get('/detalleins/{id}', function($id) {
    $productos = generarProductosCompleto();

    // validar que id sea entero y exista
    if (!is_numeric($id) || !isset($productos[(int)$id])) {
        abort(404, 'Producto no encontrado');
    }

    $producto = $productos[(int)$id];
    return view('detalleins', ['producto' => $producto, 'id' => (int)$id]);
});

// Carrito POST
Route::post('/carrito/agregar', function(Request $request){
    $producto = $request->input('producto');
    $carrito = session()->get('carrito', []);
    $carrito[] = $producto;
    session(['carrito' => $carrito]);
    return redirect('/carrito');
});
