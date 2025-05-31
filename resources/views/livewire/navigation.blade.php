<div>
  <nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between items-center">
      <div class="flex items-center justify-between">
        <a href="{{ route('home') }}">
          <h1 class="capitalize font-bold tracking-widest text-xl md:text-2xl ">BeautyAtmosphere</h1>
        </a>

        <!-- Mobile menu button -->
        <div class="flex md:hidden">
          <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
            <x-square-menu />

            <x-close-menu />
          </button>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex items-center">
        <div class="flex flex-col md:flex-row md:mx-6 md:text-xl">
          <a href="{{ route('home') }}" wire:navigate class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" wire:current.exact='font-bold underline decoration-sky-500' >Home</a>
          <a href="{{ route('price') }}" wire:navigate class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0 " wire:current='font-bold underline decoration-sky-500'>Price</a>
          <a href="{{ route('gallery') }}" wire:navigate class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" wire:current='font-bold underline decoration-sky-500'>Gallery</a>
          <a href="{{ route('contacts') }}" wire:navigate class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" wire:current='font-bold underline decoration-sky-500'>Kontakt</a>
          
          <a href="{{ route('faqs') }}" wire:navigate class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" wire:current='font-bold underline decoration-sky-500'>FAQ</a>
        </div>

        
      </div>
      <div class="flex items-center  lg:mt-0">
        {{-- <button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
          <x-bell />
        </button>
        <div class="flex justify-center ">
          <a class="relative hidden lg:block text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300" href="#">
            <x-checked />

            <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
          </a>
        </div> --}}
        
      </div>
    </div>
  </nav>
</div>