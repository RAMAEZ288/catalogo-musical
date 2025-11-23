<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSMUSIC @yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- ✅ ESTA LÍNEA ACTIVA VITE -->

    <style>
        /* Animaciones */
        .animate-hover:hover {
            transform: translateY(-3px);
            transition: all 0.3s ease-in-out;
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px);}
            100% { opacity: 1; transform: translateY(0);}
        }
    </style>
</head>

<body class="bg-gray-100">

<!-- Encabezado / Menú -->
<nav class="bg-gray-800 shadow-lg">
  <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-4">
    <a href="{{ url('/index') }}" class="flex items-center space-x-2 animate-hover">
        <img src="{{ asset('img/logo.jpg') }}" class="h-10" alt="" />
        <span class="text-2xl font-bold text-white">INSMUSIC</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Abrir menú principal</span>
        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 17 14">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col md:flex-row md:space-x-8 mt-4 md:mt-0 font-medium">
        <li><a href="{{ url('/index') }}" class="block py-2 px-3 md:p-0 text-white hover:text-yellow-300 transition-colors animate-hover">Inicio</a></li>
        <li><a href="{{ url('/nosotros') }}" class="block py-2 px-3 md:p-0 text-white hover:text-yellow-300 transition-colors animate-hover">Nosotros</a></li>
        <li><a href="{{ url('/Instrumentos') }}" class="block py-2 px-3 md:p-0 text-white hover:text-yellow-300 transition-colors animate-hover">Instrumentos</a></li>
        <li><a href="{{ url('/contacto') }}" class="block py-2 px-3 md:p-0 text-white hover:text-yellow-300 transition-colors animate-hover">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="animate-fadeIn">
    @yield('contenido')
</main>

<footer class="bg-gray-900 text-gray-100 mt-12">
    <div class="max-w-screen-xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-6">
        <div>
            <h2 class="uppercase font-semibold mb-4 text-white">Compañía</h2>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Sobre nosotros</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Carreras</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Blog</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Brand Center</a></li>
            </ul>
        </div>
        <div>
            <h2 class="uppercase font-semibold mb-4 text-white">Ayuda</h2>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-yellow-300 transition-colors">FAQ</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Soporte</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Discord</a></li>
            </ul>
        </div>
        <div>
            <h2 class="uppercase font-semibold mb-4 text-white">Legal</h2>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Política de Privacidad</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Términos y Condiciones</a></li>
                <li><a href="#" class="hover:text-yellow-300 transition-colors">Licencias</a></li>
            </ul>
        </div>
        <div>
            <h2 class="uppercase font-semibold mb-4 text-white">Redes</h2>
            <div class="flex space-x-4">
                <a href="#" class="text-white hover:text-yellow-300 transition-colors">Facebook</a>
                <a href="#" class="text-white hover:text-yellow-300 transition-colors">Twitter</a>
                <a href="#" class="text-white hover:text-yellow-300 transition-colors">Instagram</a>
                <a href="#" class="text-white hover:text-yellow-300 transition-colors">YouTube</a>
            </div>
        </div>
    </div>
    <div class="bg-gray-800 py-4 text-center text-sm text-gray-300">
        © 2025 INS MUSIC. Todos los derechos reservados.
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
@yield('scripts')

<div class="hidden" aria-hidden="true">
  <span class="scale-105 shadow-2xl rotate-3 translate-y-1 ring ring-offset-2 ring-indigo-300 bg-indigo-600 bg-indigo-700 transition duration-300 duration-200"></span>
</div>


</body>
</html>