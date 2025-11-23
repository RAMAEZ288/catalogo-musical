@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
<!-- 🔹 Sección Hero / Banner Principal -->
<section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white min-h-[60vh] flex items-center justify-center text-center px-4">
  <div>
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4">🎶 Bienvenido a INS MUSIC 🎶</h1>
    <p class="text-lg md:text-xl mb-6">Descubre instrumentos, ofertas y promociones exclusivas para ti</p>
    <a href="/Instrumentos" class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-200 transition">
      Explorar Catálogo
    </a>
  </div>
</section>

<!-- 🔹 Sección Promociones -->
<section class="py-12 bg-yellow-100 text-center">
  <h2 class="text-3xl font-bold text-gray-800 mb-6">🔥 Promociones de la Semana 🔥</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-4">
      <img src="{{ asset('images/guitarra.jpg') }}" alt="Guitarra eléctrica" class="rounded-lg w-full h-48 object-cover">
      <h3 class="mt-3 text-xl font-bold">Guitarra Eléctrica Fender</h3>
      <p class="text-gray-600 line-through">$8,999</p>
      <p class="text-green-600 font-semibold text-lg">$6,499</p>
      <form method="POST" action="/carrito/agregar" class="mt-3">
        @csrf
        <input type="hidden" name="producto" value="Guitarra Eléctrica Fender">
        <button class="bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700 transition">Agregar al carrito 🛒</button>
      </form>
    </div>

    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-4">
      <img src="{{ asset('images/bateria.jpg') }}" alt="Batería" class="rounded-lg w-full h-48 object-cover">
      <h3 class="mt-3 text-xl font-bold">Batería Yamaha Studio</h3>
      <p class="text-gray-600 line-through">$12,000</p>
      <p class="text-green-600 font-semibold text-lg">$9,500</p>
      <form method="POST" action="/carrito/agregar" class="mt-3">
        @csrf
        <input type="hidden" name="producto" value="Batería Yamaha Studio">
        <button class="bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700 transition">Agregar al carrito 🛒</button>
      </form>
    </div>

    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-4">
      <img src="{{ asset('images/teclado.jpg') }}" alt="Teclado Roland" class="rounded-lg w-full h-48 object-cover">
      <h3 class="mt-3 text-xl font-bold">Teclado Roland GO</h3>
      <p class="text-gray-600 line-through">$7,000</p>
      <p class="text-green-600 font-semibold text-lg">$5,400</p>
      <form method="POST" action="/carrito/agregar" class="mt-3">
        @csrf
        <input type="hidden" name="producto" value="Teclado Roland GO">
        <button class="bg-green-600 text-white px-5 py-2 rounded-full hover:bg-green-700 transition">Agregar al carrito 🛒</button>
      </form>
    </div>
  </div>
</section>

<!-- 🔹 Sección Ofertas y Recomendados -->
<section class="py-12 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">🎁 Productos Recomendados</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      @foreach([
        ['nombre'=>'Micrófono Shure SM58', 'imagen'=>'microfono.jpg', 'precio'=>'2,500'],
        ['nombre'=>'Violín Stentor Student I', 'imagen'=>'violin.jpg', 'precio'=>'3,800'],
        ['nombre'=>'Amplificador Marshall MG15', 'imagen'=>'amplificador.jpg', 'precio'=>'4,200'],
        ['nombre'=>'Bajo Eléctrico Ibanez', 'imagen'=>'bajo.jpg', 'precio'=>'7,100']
      ] as $p)
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-4 text-center">
        <img src="{{ asset('images/'.$p['imagen']) }}" class="rounded-lg w-full h-40 object-cover" alt="{{ $p['nombre'] }}">
        <h3 class="mt-3 text-lg font-bold">{{ $p['nombre'] }}</h3>
        <p class="text-green-600 font-semibold">${{ $p['precio'] }}</p>
        <form method="POST" action="/carrito/agregar" class="mt-3">
          @csrf
          <input type="hidden" name="producto" value="{{ $p['nombre'] }}">
          <button class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Agregar al carrito 🛒</button>
        </form>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- 🔹 Sección Video Promocional -->
<section class="py-12 bg-indigo-600 text-white text-center px-4">
  <h2 class="text-3xl font-bold mb-6">🎥 Conoce nuestra tienda</h2>
  <div class="max-w-4xl mx-auto">
    <iframe class="w-full h-64 md:h-96 rounded-xl shadow-lg" src="https://www.youtube.com/watch?v=H7Trp9aa6Dk&t=3s" title="Video promocional" allowfullscreen></iframe>
  </div>
</section>

@endsection