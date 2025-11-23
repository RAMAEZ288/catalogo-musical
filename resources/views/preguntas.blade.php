@extends('plantilla')

@section('/titulo', 'C O N T A C T O S')

@section('contenido')
     <p>Esta es el area de preguntas</p>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our team</h2>
          <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
            Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind
          </p>
      </div> 
      <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

          <!-- Miembro 1 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bonnie Green</h3>
              <p>CEO/Co-founder</p>
          </div>

          <!-- Miembro 2 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png" alt="Helene Engels">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Helene Engels</h3>
              <p>CTO/Co-founder</p>
          </div>

          <!-- Miembro 3 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://www.jpmusical.com/cdn/shop/products/C40_1000x.png?v=1588703077" alt="Jese Leos">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jese Leos</h3>
              <p>SEO & Marketing</p>
          </div>

          <!-- Miembro 4 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Joseph Mcfall">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Joseph Mcfall</h3>
              <p>Sales</p>
          </div>

          <!-- Miembro 5 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Lana Byrd">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lana Byrd</h3>
              <p>Web Designer</p>
          </div>

          <!-- Miembro 6 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png" alt="Michael Gough">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Michael Gough</h3>
              <p>Developer</p>
          </div>

          <!-- Miembro 7 -->
          <div class="text-center text-gray-500 dark:text-gray-400">
              <div class="mb-4 flex justify-center">
                  <img class="w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/julia-myers.png" alt="Julia Myers">
              </div>
              <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Julia Myers</h3>
              <p>UI/UX Designer</p>
          </div>

      </div>
  </div>
</section>
@endsection
