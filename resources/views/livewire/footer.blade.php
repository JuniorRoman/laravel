<div>
  <footer class="bg-white dark:bg-gray-900 border-t-1">
    <div class="relative z-0">
      <div class="absolute bottom-2 left-0 z-[-1]">
        <x-cub-icon />
      </div>
    <div class="container flex flex-col items-center justify-between px-6 py-8 mx-auto lg:flex-row">
      <a href="{{route('home')}}">
        <img class="w-auto h-10" src="/images/svg/logo_bl.svg" alt="">
      </a>

      <div class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
        <a href="{{route('home')}}" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
          Home
        </a>

        <a href="{{route('gallery')}}" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
          Gallery
        </a>

        <a href="{{ route('price') }}" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
          Cenik
        </a>
        <a href="{{route('contacts')}}" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
          Kontakt
        </a>

        <a href="{{route('faqs')}}" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
          Faq
        </a>
{{-- 
        <a href="#" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
          Privacy
        </a> --}}
      </div>

      <p class="mt-6 text-sm text-gray-500 lg:mt-0 dark:text-gray-400">© Copyright 2023 Beauty Atmosphera </p>
    </div>
      </div>
    
  </footer>
</div>