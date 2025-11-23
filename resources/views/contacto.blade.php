@extends('plantilla')

@section('titulo', 'Contacto / FAQ')

@section('contenido')

<!-- Encabezado sección Contacto -->
<section class="flex justify-center items-center bg-gradient-to-r from-green-400 via-teal-400 to-blue-500 h-52 sm:h-60 md:h-64 m-4 sm:m-6 rounded-2xl shadow-2xl text-center p-4">
    <div>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg">Contáctanos</h2>
        <p class="mt-2 text-white/90 text-sm sm:text-base md:text-lg">Estamos aquí para ayudarte. Escríbenos y responderemos lo antes posible.</p>
    </div>
</section>

<!-- Formulario de contacto -->
<section class="flex justify-center m-4 sm:m-6">
    <div class="flex flex-col bg-white w-full max-w-4xl p-6 sm:p-8 rounded-2xl shadow-xl gap-6">
        <div class="flex flex-col md:flex-row gap-4">
            <input type="text" placeholder="Nombre" class="flex-1 h-14 px-4 border border-gray-300 rounded-lg">
            <input type="email" placeholder="Email" class="flex-1 h-14 px-4 border border-gray-300 rounded-lg">
        </div>
        
        <textarea placeholder="Mensaje" class="h-36 px-4 py-2 border border-gray-300 rounded-lg resize-none"></textarea>
        
        <button class="h-14 bg-gradient-to-r from-green-400 to-blue-500 text-white font-bold rounded-lg">
            Enviar Mensaje
        </button>
    </div>
</section>

<!-- Preguntas Frecuentes (FAQ) -->
<section class="flex justify-center m-4 sm:m-6">
    <div class="flex flex-col w-full max-w-4xl gap-4 bg-white p-6 rounded-2xl shadow-xl">
        <h2 class="text-2xl font-bold mb-4">Preguntas Frecuentes (FAQ)</h2>

        <div class="faq-item">
            <div class="faq-question" style="cursor:pointer; padding:10px; background:#f0f0f0; border-radius:5px;">
                ¿Cuánto tiempo tarda en llegar mi pedido? ⯆
            </div>
            <div class="faq-answer hidden" style="padding:10px;">
                Normalmente nuestros pedidos tardan entre 3 y 5 días hábiles en llegar.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" style="cursor:pointer; padding:10px; background:#f0f0f0; border-radius:5px;">
                ¿Puedo cambiar o cancelar mi pedido? ⯆
            </div>
            <div class="faq-answer hidden" style="padding:10px;">
                Sí, puedes cambiar o cancelar tu pedido dentro de las primeras 24 horas después de realizarlo.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" style="cursor:pointer; padding:10px; background:#f0f0f0; border-radius:5px;">
                ¿Tienen garantía en los productos? ⯆
            </div>
            <div class="faq-answer hidden" style="padding:10px;">
                Sí, todos nuestros productos cuentan con garantía de 1 año contra defectos de fabricación.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" style="cursor:pointer; padding:10px; background:#f0f0f0; border-radius:5px;">
                ¿Puedo recoger mi pedido en tienda? ⯆
            </div>
            <div class="faq-answer hidden" style="padding:10px;">
                Sí, puedes seleccionar la opción de recoger en tienda durante el proceso de compra.
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    @vite('resources/js/faq.js')
@endsection
