<section class="feature relative z-1 bg-gray-100 py-5" id="features">

    <div class="container mx-auto px-2 my-10">
        <div class="text-center my-10 ">
            <h2 class="text-3xl md:text-4xl font-bold tracking-wide text-center">Nasze usługi</h2>
            <p class="text-md md:text-xl text-gray-500 mt-2 md:mt-4">Mistrzowie pomogą podkreślić Twoją urodę.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($features as $feature)
            <a href="{{ route('price')}}"
                class="relative z-2 flex flex-col justify-between items-center bg-white shadow-2xl rounded-xl p-4 text-center">
                <img
                    class="object-cover mx-auto rounded-full w-50 h-50"
                    src="{{ asset($feature->image) }}"
                    alt="{{ $feature->title }}">
                    <div class="mt-6 flex-1 bg-[url('/assets/images/ddd.jpg')] bg-cover bg-center">
                        <h2 class="text-xl md:text-2xl font-bold tracking-wide">{{ $feature->title }}</h2>
                        <p class="text-sm md:text-xl font-light tracking-wide my-4 text-center">
                            {{ $feature->description }}
                        </p>
                    </div>
                    <div
                        class="absolute z-0 top-2 left-1 w-10 h-10 text-[6px] flex justify-center items-center p-2 bg-[url('/public/images/svg/logo.svg')] text-white rounded-full"
                        >atmosphere
                      </div>
                    <div class="absolute right-0 bottom-30 z-[-1]">
                        <x-circle-icon/>
                    </div>
                    <div class="absolute bottom-1 left-0 z-[-1]">
                      <x-cub-icon/>
                    </div>
              </a>

                @endforeach
            </div>
        </div>
    </section>