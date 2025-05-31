<section class="relative h-full w-full  py-5 ">
   

    <div
        class=" container mx-auto h-full grid grid-cols-1 md:grid-cols-3 gap-4 p-2">

        <!-- Блок 1: Карта клієнта -->
        @foreach ($blocks as $block)
        <div
            class="flip-card-inner relative z-1 transition-transform duration-700  w-full h-[180px] rounded-xl p-4">
            <div
                class=" absolute z-2 inset-0 rounded-xl shadow-lg text-white bg-gradient-to-tr from-orange-400 to-sky-600 items-start justify-start text-xl sm:text-2xl font-bold p-4">
                <img class="absolute top-0 left-0 " src="{{ $block->icon }}" alt="icon"/>
                <h2 class="text-2xl font-bold tracking-wide uppercase masked-text">
                    {{ $block->title }}
                </h2>
                <p class="text-sm font-light tracking-wide mt-1">{{ $block->desc }}</p>

                <a
                    href="/faqs"
                    class="absolute bottom-3 flex space-x-1 text-sm/5 bg-accent rounded-xl px-3 py-2">
                    <span>więcej</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right">
                        <path d="M7 7h10v10"/>
                        <path d="M7 17 17 7"/>
                      </svg>
                </a>

                <span class="absolute  bottom-0 right-0 ">
                    <x-logo-icon/>
                </span>

            </div>

        </div>

        @endforeach

    </div>

</section>