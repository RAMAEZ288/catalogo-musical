@extends('plantilla')

@section('titulo', 'Instrumentos')

@section('contenido')

<!-- Encabezado -->
<section class="flex justify-center items-center bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-600 h-48 sm:h-56 md:h-64 m-4 sm:m-6 rounded-xl shadow-lg text-center">
  <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white drop-shadow-lg animate-pulse">Nuestros Instrumentos</h2>
</section>

@php
  // Si por alguna razón la ruta no pasó $productos, evitamos errores
  $productos = $productos ?? [];

  // Extraer categorías únicas para el menú
  // Usamos collect() que viene con Laravel
  try {
    $categorias = collect($productos)->pluck('categoria')->unique()->values()->all();
  } catch (\Throwable $e) {
    // Fallback sencillo si collect no está disponible
    $categorias = [];
    foreach ($productos as $p) {
      if (!in_array($p['categoria'] ?? '', $categorias)) $categorias[] = $p['categoria'] ?? '';
    }
  }
@endphp

<!-- Menú de categorías y Buscador -->
<section id="menu-categorias" class="flex flex-col gap-4 p-4 m-4 bg-gradient-to-r from-green-200 via-yellow-100 to-pink-200 rounded-xl">
  <div class="flex flex-wrap items-center gap-2">
    <!-- Botón Todas -->
    <a id="cat-todas" href="javascript:void(0)" data-categoria="todas" class="px-4 py-2 rounded shadow bg-white hover:bg-gray-100 transition effect-btn">Todas</a>

    @foreach($categorias as $cat)
      @php $slug = strtolower(str_replace(' ', '-', $cat)); @endphp
      <a 
        id="cat-{{ $slug }}" 
        href="javascript:void(0)" 
        class="categoria px-4 py-2 rounded shadow bg-white hover:bg-green-300 transition effect-btn" 
        data-categoria="{{ $slug }}"
      >
        {{ $cat }}
      </a>
    @endforeach
  </div>

  <!-- Buscador  -->
  <div class="flex justify-center">
    <input id="search-input" type="search" placeholder="Buscar producto por nombre..." 
      class="w-full sm:w-1/2 px-4 py-2 rounded shadow focus:outline-none" />
  </div>
</section>

<!-- Grid de productos -->
<section id="grid-productos" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4 m-4 max-w-7xl mx-auto">
  @forelse($productos as $index => $producto)
    @php
      // Aseguramos campos por si falta alguno
      $img = $producto['img'] ?? 'placeholder.jpg';
      $nombre = $producto['nombre'] ?? 'Producto';
      $categoria = $producto['categoria'] ?? 'Varios';
      $slug = strtolower(str_replace(' ', '-', $categoria));
    @endphp

    <a href="{{ url('/detalleins/'.$index) }}" class="block h-full">
      <article 
        class="tarjeta-producto flex flex-col h-full bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 ease-in-out effect-card {{ $slug }}" 
        data-categoria="{{ $slug }}"
        data-nombre="{{ strtolower($nombre) }}"
        id="product-card-{{ $index }}"
      >
        <div class="img-wrap h-44 sm:h-48 md:h-52 w-full overflow-hidden">
          <img src="{{ asset('images/'.$img) }}" alt="{{ $nombre }}" class="w-full h-full object-cover object-center transition-transform duration-300 effect-image" id="img-{{ $index }}">
        </div>
        <div class="p-4 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-lg sm:text-xl text-gray-800 leading-tight">{{ $nombre }}</h3>
            <p class="text-sm text-gray-500 mt-1">{{ $categoria }}</p>
          </div>
          <!-- Pequeña fila inferior con precio y (si decides) botón -->
          <div class="mt-3 flex items-center justify-between">
            <span class="font-bold text-indigo-600">${{ number_format( (100 + $index), 2) }}</span>
            <span class="px-3 py-1 rounded-lg text-white bg-indigo-600 transition transform duration-200 effect-btn" id="btn-{{ $index }}">Ver</span>
          </div>
        </div>
      </article>
    </a>
  @empty
    <div class="col-span-4 text-center py-12">
      <p class="text-gray-600">No hay productos para mostrar.</p>
    </div>
  @endforelse
</section>

<!-- filtrado y búsqueda (se dejó intacto y ahora usa los elementos renderizados por la ruta) -->
<script>
document.addEventListener("DOMContentLoaded", function() {

  const menu = document.getElementById('menu-categorias');               
  const searchInput = document.getElementById('search-input');           
  const grid = document.getElementById('grid-productos');                
  const productosCollection = document.getElementsByClassName('tarjeta-producto');

  /* Estado actual  */
  let currentCategory = 'todas';
  let currentQuery = '';

  /*  Funciones explícitas  */

  function getProductosArray() {
    return Array.from(productosCollection);
  }

  // Mostrar todas las tarjetas 
  function mostrarTodas() {
    getProductosArray().forEach(prod => {
      prod.classList.remove('hidden');
    });
    activarBoton('todas');
    currentCategory = 'todas';
  }

  // Filtra por categoría
  function filtrarCategoria(slug) {
    currentCategory = (slug || 'todas').toLowerCase();
    activarBoton(currentCategory);
    aplicarFiltros();
    
    if (grid) grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  //  input del buscador
  function handleSearchInput(e) {
    currentQuery = (e.target.value || '').trim().toLowerCase();
    aplicarFiltros();
  }

  // filtros combinados: categoría + busqueda por nombre
  function aplicarFiltros() {
    const productos = getProductosArray();
    const q = currentQuery;
    const cat = currentCategory;

    productos.forEach(prod => {
      const prodCat = (prod.dataset.categoria || '').toLowerCase();
      const prodName = (prod.dataset.nombre || '').toLowerCase();

      const matchCategory = (cat === 'todas') || (prodCat === cat);
      const matchName = (q === '') || prodName.includes(q);

      // Mostrar u ocultar 
      if (matchCategory && matchName) {
        prod.classList.remove('hidden');      
      } else {
        prod.classList.add('hidden');        
      }
    });
  }

  // Marca visualmente el botón activo
  function activarBoton(slug) {
    const botones = menu.querySelectorAll('a');
    botones.forEach(b => b.classList.remove('ring-2', 'ring-indigo-400'));
    const objetivo = document.querySelector('#cat-' + slug.toLowerCase());
    if (objetivo) objetivo.classList.add('ring-2', 'ring-indigo-400');
  }

  // Delegación de eventos en el menú para manejar clics en categorías
  if (menu) {
    menu.addEventListener('click', function(e) {
      const enlace = e.target.closest('a');
      if (!enlace) return;
      e.preventDefault();
      const categoria = (enlace.dataset.categoria || 'todas').toLowerCase();
      filtrarCategoria(categoria);
    });
  }

  // Evento del buscador (input)
  if (searchInput) {
    searchInput.addEventListener('input', handleSearchInput);
  }

  // mostrar todas al cargar
  mostrarTodas();

});
</script>

<style>
  .hidden { display: none !important; }
  .leading-tight {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>

@endsection
