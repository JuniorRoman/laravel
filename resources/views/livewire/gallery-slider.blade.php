<section class="">
  <div class="bg-white">
      <div class="container mx-auto px-4 py-8">
          <h1 class="text-4xl font-bold text-center mb-8">Galeria</h1>

          <div class="grid grid-cols-1 gap-10">
              @foreach ($galleries as $category => $images)
                  <div>
                      <h2 class="text-2xl font-semibold mb-4 capitalize">{{ $category }}</h2>

                      <div class="swiper swiper_gallery rounded-xl bg-white swiper-backface-hidden ">
                          <div wire:ignore.self  class="swiper-wrapper h-[200px]">
                              @foreach ($images as $img)
                                  <div wire:ignore class="swiper-slide h-[200px] text-center rounded-xl bg-white relative">
                                      <img src="{{ $img->img }}" alt="" class="object-cover w-full h-full rounded-xl">
                                      <div class="absolute z-1 -top-5 right-0">
                                        <x-logo-icon />
                                      </div>
                                  </div>
                              @endforeach
                            </div>
                          </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</section>


