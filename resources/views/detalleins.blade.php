@extends('plantilla')

@section('titulo', $producto['nombre'] ?? 'Detalle del Instrumento')

@section('contenido')

@php
  // Si por alguna razón no se pasó $producto, manejamos el fallback
  $producto = $producto ?? null;
@endphp

@if($producto)
<section class="max-w-6xl mx-auto p-4 sm:p-6 m-4 sm:m-6 bg-white rounded-xl shadow-lg flex flex-col md:flex-row gap-6 animate-fadeIn">

    <!-- Imagen del instrumento -->
    <div class="flex-1 flex justify-center items-center">
        <img src="{{ asset('images/' . ($producto['img'] ?? 'placeholder.jpg')) }}" alt="{{ $producto['nombre'] ?? 'Producto' }}" class="w-full max-w-md h-auto rounded-xl shadow-lg object-cover">
    </div>

    <!-- Información del instrumento -->
    <div class="flex-1 flex flex-col gap-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">{{ $producto['nombre'] ?? 'Producto' }}</h2>
        <p class="text-gray-600 text-lg">{{ $producto['descripcion'] ?? ($producto['categoria'] ?? '') }}</p>
        <span class="text-2xl sm:text-3xl font-bold text-green-600">{{ $producto['precio'] ?? ('$' . (100)) }}</span>

        <!-- Botones de acción -->
        <form action="{{ url('/carrito/agregar') }}" method="POST" class="flex gap-4 mt-4">
            @csrf
            <input type="hidden" name="producto" value="{{ $producto['nombre'] ?? '' }}">
            <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition">Agregar al Carrito</button>
            <a href="#" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">Comprar Ahora</a>
        </form>

        <!-- Especificaciones -->
        @if(!empty($producto['especificaciones']) && is_array($producto['especificaciones']))
        <div class="mt-6 bg-gray-100 p-4 rounded-lg shadow-inner">
            <h3 class="text-xl font-semibold mb-2">Especificaciones</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                @foreach($producto['especificaciones'] as $key => $value)
                    <li><span class="font-semibold">{{ $key }}:</span> {{ $value }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

</section>
@else
<div class="max-w-2xl mx-auto text-center p-6 m-6 bg-red-100 text-red-700 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold">Producto no encontrado</h2>
    <p>Lo sentimos, el producto que estás buscando no existe o la información no fue enviada correctamente.</p>
    <a href="{{ url('/Instrumentos') }}" class="mt-4 inline-block px-4 py-2 bg-gray-800 text-white rounded">Volver al catálogo</a>
</div>
@endif

<!-- Animaciones -->
<style>
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(10px);}
    100% { opacity: 1; transform: translateY(0);}
}
.animate-fadeIn { animation: fadeIn 0.8s ease-in-out forwards; }
</style>

@endsection
