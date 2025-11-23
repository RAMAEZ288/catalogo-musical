@extends('plantilla.plantilla')

@section('titulo', 'Instrumentos')

@section('contenido')

<!-- Encabezado de Productos -->
<section class="flex justify-center items-center bg-gradient-to-r from-blue-500 to-indigo-600 h-48 sm:h-56 md:h-64 m-4 sm:m-6 rounded-xl shadow-lg">
  <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white text-center">Nuestros Instrumentos</h2>
</section>

<!-- Buscador y filtros -->
<section class="flex flex-col md:flex-row justify-between items-center gap-4 p-4 sm:p-6 m-4 sm:m-6 bg-gray-200 rounded-xl">
  <!-- Buscador -->
  <div class="flex-1 h-12 bg-white rounded shadow px-4 flex items-center w-full md:w-auto">
    <span class="text-gray-400">Buscar instrumento...</span>
  </div>

  <!-- Filtros por tipo -->
  <div class="flex gap-2 sm:gap-4 flex-wrap justify-center md:justify-start">
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Guitarras</div>
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Bajos</div>
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Pedales</div>
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Accesorios</div>
  </div>

  <!-- Filtros por marca -->
  <div class="flex gap-2 sm:gap-4 flex-wrap justify-center md:justify-start">
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Marca 1</div>
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Marca 2</div>
    <div class="bg-white px-4 py-2 rounded shadow cursor-pointer">Marca 3</div>
  </div>
</section>

<!-- Grid de productos -->
<section class="flex flex-wrap justify-center gap-4 sm:gap-6 p-4 sm:p-6 m-4 sm:m-6">
  <!-- Producto ejemplo -->
  <div class="flex flex-col bg-white w-44 sm:w-52 md:w-64 h-72 sm:h-80 md:h-80 rounded-xl shadow-lg items-center justify-center p-4">
    <div class="bg-gray-300 w-full h-32 sm:h-36 md:h-40 mb-4 flex items-center justify-center">Imagen</div>
    <h3 class="font-bold text-lg sm:text-xl">Guitarra 1</h3>
    <span class="text-gray-500">Categoría</span>
  </div>

  <div class="flex flex-col bg-white w-44 sm:w-52 md:w-64 h-72 sm:h-80 md:h-80 rounded-xl shadow-lg items-center justify-center p-4">
    <div class="bg-gray-300 w-full h-32 sm:h-36 md:h-40 mb-4 flex items-center justify-center">Imagen</div>
    <h3 class="font-bold text-lg sm:text-xl">Bajo 1</h3>
    <span class="text-gray-500">Categoría</span>
  </div>

  <div class="flex flex-col bg-white w-44 sm:w-52 md:w-64 h-72 sm:h-80 md:h-80 rounded-xl shadow-lg items-center justify-center p-4">
    <div class="bg-gray-300 w-full h-32 sm:h-36 md:h-40 mb-4 flex items-center justify-center">Imagen</div>
    <h3 class="font-bold text-lg sm:text-xl">Pedal 1</h3>
    <span class="text-gray-500">Categoría</span>
  </div>

  <div class="flex flex-col bg-white w-44 sm:w-52 md:w-64 h-72 sm:h-80 md:h-80 rounded-xl shadow-lg items-center justify-center p-4">
    <div class="bg-gray-300 w-full h-32 sm:h-36 md:h-40 mb-4 flex items-center justify-center">Imagen</div>
    <h3 class="font-bold text-lg sm:text-xl">Accesorio 1</h3>
    <span class="text-gray-500">Categoría</span>
  </div>
</section>

@endsection
