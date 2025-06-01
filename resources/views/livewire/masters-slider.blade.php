<section class="py-12 relative z-0 bg-white">
  <div class="absolute bottom-0 left-0 right-0 z-[-1] h-full w-full bg-[url('/public/images/video/shape.svg')] bg-cover bg-center bg-no-repeat"></div>
  <div class="container mx-auto px-4">
    <div class="text-center mb-10">
      <h2 class="text-2xl font-bold tracking-wide lg:text-4xl">Nasz sympatyczny zespół</h2>
      <p class="text-md text-gray-500 mt-4 lg:text-xl">To właśnie ci ludzie stoją za naszymi sukcesami i osiągnięciami.</p>
    </div>

    <div wire:ignore>
      <div class="swiper swiper_master border rounded-xl bg-white">
        <div class="swiper-wrapper py-2 h-[250px]">
          @foreach ($masters as $master)
          <div wire:ignore class="p-4  swiper-slide h-[250px] text-center rounded-xl shadow-2xl bg-white">
            
              <div class="aspect-[2/2] overflow-hidden rounded-lg ">
                <img src="{{ $master->image }}" alt="{{ $master->name }}" class="object-cover w-full h-full" />
              </div>
              <div class="mt-5">

                <h3 class="text-lg font-semibold">{{ $master->name }}</h3>
                <p class="text-gray-600 text-sm font-normal">{{ $master->specialty }}</p>

              </div>
              <div class="absolute top-0 right-1">
                <x-logo-icon />
              </div>
          
          </div>

          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 'https://images.unsplash.com/photo-1519681393784-d120267933ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1124&q=100');
background-position: center; -->