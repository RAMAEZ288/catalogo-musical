@extends('plantilla')

@section('titulo', 'Carrito')

@section('contenido')

<!-- Encabezado de Carrito -->
<section class="flex justify-center items-center bg-gradient-to-r from-yellow-400 to-red-500 h-48 sm:h-56 md:h-64 m-4 sm:m-6 rounded-xl shadow-lg animate-fadeIn">
  <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white text-center">Tu Carrito</h2>
</section>

<!-- Contenedor principal del carrito -->
<section class="flex flex-col md:flex-row gap-4 sm:gap-6 p-4 sm:p-6 m-4 sm:m-6">

  <!-- Lista de productos en el carrito -->
  <div class="flex-1 flex flex-col gap-4">
    <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow-lg p-4 sm:h-32 items-center sm:items-start justify-between hover:shadow-2xl transition-shadow">
      <div class="bg-gray-100 w-full sm:w-24 h-40 sm:h-24 flex items-center justify-center rounded overflow-hidden">
        <img src="{{ asset('images/guitarra1.jpg') }}" alt="Guitarra 1" class="w-full h-full object-cover">
      </div>
      <div class="flex-1 mt-2 sm:mt-0 sm:ml-4 flex flex-col justify-center">
        <span class="font-bold text-lg">Guitarra Eléctrica</span>
        <span class="text-gray-500">Instrumentos</span>
      </div>
      <div class="mt-2 sm:mt-0 text-right">
        <span class="font-semibold">$1000</span>
        <div class="mt-2 bg-red-500 text-white px-3 py-1 rounded cursor-pointer text-sm sm:text-base hover:bg-red-600 transition">Eliminar</div>
      </div>
    </div>

    <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow-lg p-4 sm:h-32 items-center sm:items-start justify-between hover:shadow-2xl transition-shadow">
      <div class="bg-gray-100 w-full sm:w-24 h-40 sm:h-24 flex items-center justify-center rounded overflow-hidden">
        <img src="{{ asset('images/teclado1.jpg') }}" alt="Teclado 1" class="w-full h-full object-cover">
      </div>
      <div class="flex-1 mt-2 sm:mt-0 sm:ml-4 flex flex-col justify-center">
        <span class="font-bold text-lg">Teclado Profesional</span>
        <span class="text-gray-500">Instrumentos</span>
      </div>
      <div class="mt-2 sm:mt-0 text-right">
        <span class="font-semibold">$1500</span>
        <div class="mt-2 bg-red-500 text-white px-3 py-1 rounded cursor-pointer text-sm sm:text-base hover:bg-red-600 transition">Eliminar</div>
      </div>
    </div>
  </div>

  <!-- Resumen del carrito -->
  <div class="w-full md:w-1/3 bg-white rounded-xl shadow-lg p-4 sm:p-6 flex flex-col gap-4 hover:shadow-2xl transition-shadow">
    <h3 class="text-xl sm:text-2xl font-bold">Resumen</h3>
    <div class="flex justify-between">
      <span>Subtotal</span>
      <span>$2500</span>
    </div>
    <div class="flex justify-between">
      <span>Impuestos</span>
      <span>$250</span>
    </div>
    <div class="flex justify-between font-bold text-lg sm:text-xl">
      <span>Total</span>
      <span>$2750</span>
    </div>
    <div class="bg-green-500 text-white text-center py-3 rounded cursor-pointer hover:bg-green-600 transition">Proceder al Pago</div>
  </div>

</section>

@endsection