@extends('plantilla') <!-- Ajuste para apuntar a tu plantilla base -->

@section('titulo', 'Nosotros')

@section('contenido')

<!-- Banner principal -->
<section class="flex flex-col justify-center items-center bg-gradient-to-r from-blue-400 via-white to-blue-400 h-64 sm:h-72 md:h-80 m-4 sm:m-6 rounded-xl shadow-lg text-center p-4 relative overflow-hidden">
  
  <!-- Título animado -->
  <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-transparent bg-clip-text animate-text bg-gradient-to-r from-pink-500 via-yellow-400 to-purple-500">
    Conócenos
  </h2>
  
<!-- Subtítulo animado -->
<p class="mt-4 max-w-md sm:max-w-lg md:max-w-xl text-sm sm:text-base md:text-lg px-2 text-black animate-subtext">
  Descubre nuestra historia, misión y visión mientras construimos un mundo de música y pasión.
</p>


</section>

<!-- Tailwind CSS Animaciones Personalizadas -->
<style>
@keyframes text-slide {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.animate-text {
  background-size: 200% 200%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: text-slide 4s linear infinite;
}

.animate-subtext {
  background-size: 200% 200%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: text-slide 6s linear infinite;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fadeIn {
  animation: fadeIn 1.5s ease-in-out forwards;
}
</style>

<!-- Historia, Misión y Visión -->
<section class="flex flex-col md:flex-row justify-around bg-gray-50 p-4 sm:p-6 m-4 sm:m-6 rounded-xl gap-6">
  <div class="bg-white flex-1 h-64 sm:h-72 flex flex-col items-center justify-center rounded-xl shadow-lg border hover:scale-105 transition transform duration-300 p-4">
    <h3 class="text-xl sm:text-2xl font-semibold mb-2 text-blue-600">Historia</h3>
    <p class="text-gray-600 text-center px-4">Desde nuestros inicios, hemos buscado acercar la música a todos los rincones, ofreciendo productos de calidad y experiencias inolvidables.</p>
  </div>
  <div class="bg-white flex-1 h-64 sm:h-72 flex flex-col items-center justify-center rounded-xl shadow-lg border hover:scale-105 transition transform duration-300 p-4">
    <h3 class="text-xl sm:text-2xl font-semibold mb-2 text-green-600">Misión</h3>
    <p class="text-gray-600 text-center px-4">Nuestra misión es brindar a músicos y entusiastas los mejores instrumentos y servicios, fomentando la creatividad y la pasión por la música.</p>
  </div>
  <div class="bg-white flex-1 h-64 sm:h-72 flex flex-col items-center justify-center rounded-xl shadow-lg border hover:scale-105 transition transform duration-300 p-4">
    <h3 class="text-xl sm:text-2xl font-semibold mb-2 text-purple-600">Visión</h3>
    <p class="text-gray-600 text-center px-4">Ser reconocidos como líderes en el mundo de la música, conectando talento, innovación y experiencias únicas para nuestros clientes.</p>
  </div>
</section>

<!-- Equipo -->
<section class="flex flex-col items-center bg-gray-100 p-4 sm:p-6 m-4 sm:m-6 rounded-xl">
  <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 text-center text-gray-800">Nuestro Equipo</h2>
  <div class="flex flex-col md:flex-row justify-around gap-6 w-full">
    <!-- Integrante 1 -->
    <div class="bg-white flex-1 h-72 sm:h-80 flex flex-col items-center justify-center rounded-xl shadow-lg border hover:scale-105 transition transform duration-300 p-4">
      <img src="{{ asset('images/integrante1.jpg') }}" alt="Integrante 1" class="w-28 sm:w-32 h-28 sm:h-32 rounded-full mb-4 shadow-md object-cover">
      <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Integrante 1</h3>
      <p class="text-gray-600 text-center mt-2 text-sm sm:text-base">CEO & Fundador</p>
    </div>
    <!-- Integrante 2 -->
    <div class="bg-white flex-1 h-72 sm:h-80 flex flex-col items-center justify-center rounded-xl shadow-lg border hover:scale-105 transition transform duration-300 p-4">
      <img src="{{ asset('images/integrante2.jpg') }}" alt="Integrante 2" class="w-28 sm:w-32 h-28 sm:h-32 rounded-full mb-4 shadow-md object-cover">
      <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Integrante 2</h3>
      <p class="text-gray-600 text-center mt-2 text-sm sm:text-base">Directora de Marketing</p>
    </div>
    <!-- Integrante 3 -->
    <div class="bg-white flex-1 h-72 sm:h-80 flex flex-col items-center justify-center rounded-xl shadow-lg border hover:scale-105 transition transform duration-300 p-4">
      <img src="{{ asset('images/integrante3.jpg') }}" alt="Integrante 3" class="w-28 sm:w-32 h-28 sm:h-32 rounded-full mb-4 shadow-md object-cover">
      <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Integrante 3</h3>
      <p class="text-gray-600 text-center mt-2 text-sm sm:text-base">Encargado de Ventas</p>
    </div>
  </div>
</section>

@endsection