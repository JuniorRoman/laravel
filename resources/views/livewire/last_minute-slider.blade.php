<section class="py-10 bg-gray-100">
  

    <div class="container mx-auto p-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <div class="flex flex-col justify-between  h-full">

                <div class="text-xl md:text-2xl font-bold mb-2 ">
                    <span 
                        x-data="{ phrases: ['Last minute', 'Konkursy i Promocje'], index: 0 }"
                        x-init="setInterval(() => index = (index + 1) % phrases.length, 3000)">
                        <span  x-text="phrases[index]"></span>
                    </span>
                </div>

                <div class="swiper swiper_promo w-full h-full rounded-xl">
                    <div class="swiper-wrapper h-full">
                        @foreach ($promos as $item)
                        <div class="swiper-slide w-full ">
                            <div
                                class="flex flex-col h-full bg-white bg-opacity-10 rounded-xl border-2 p-4 text-cyan-900">
                                <div class="flex-1 flex flex-col justify-between">
                                    <h4 class="text-lg text-center md:text-xl font-semibold mb-5">
                                        {{ $item['title'] }}
                                    </h4>
                                    <ul class="justify-center flex-1 px-4">
                                      @foreach ($item['rules'] as $rulle)
                                          <li>{{$rulle}}</li>
                                      @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-between h-full">

                <div class="text-xl md:text-2xl font-bold mb-2">
                    <span
                        x-data="{ phrases: ['Praca/Ogłoszenie', 'Tu może być twoja reklama'], index: 0 }"
                        x-init="setInterval(() => index = (index + 1) % phrases.length, 3000)">
                        <span x-text="phrases[index]"></span>
                    </span>
                </div>

                <div class="swiper swiper_minute w-full h-full rounded-xl">
                    <div class="swiper-wrapper h-full">
                        @foreach ($market as $item)
                        <div class="swiper-slide w-full ">
                            <div
                                class="flex flex-col md:flex-row h-full bg-white bg-opacity-50 rounded-xl border-2 p-4 text-cyan-900">
                                @if(!empty($item['img']))
                                <div class="md:border-r-2">

                                  <img class="w-40 h-40 mx-auto p-2  " src="{{$item['img']}}" alt="">
                                </div>
                                  @endif
                                <div class="flex-1 flex flex-col p-2">
                                    <h4 class="text-lg text-center md:text-xl font-semibold ">
                                        {{ $item['title'] }}
                                    </h4>
                                    <p class="mt-1 px-2">{{ $item['desc'] }}</p>
                                    <a href="tel:{{$item['phone']}}" class="mt-auto text-end font-semibold">
                                       tel. {{ $item['phone'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>