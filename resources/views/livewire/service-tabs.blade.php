<section class="container mx-auto flex-1">
  <div class="p-4">
    <div class="mt-2">
      <div x-data="{ activeTab: 'all', openItem: null }">
        <div class="mb-6">
          <div class="flex flex-wrap gap-2 mb-4">
            <button
              @click="activeTab = 'all'"
              :class="activeTab === 'all' ? 'bg-zinc-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
              class="px-4 py-2 rounded-lg text-lg font-medium transition-colors">
              All Sections
            </button>
            <button
              @click="activeTab = 'Fryzjer'"
              :class="activeTab === 'Fryzjer' ? 'bg-zinc-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
              class="px-4 py-2 rounded-lg text-lg font-medium transition-colors">
              Fryzjer </button>
            <button
              @click="activeTab = 'Manicure/Pedicure'"
              :class="activeTab === 'Manicure/Pedicure' ? 'bg-zinc-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
              class="px-4 py-2 rounded-lg text-lg font-medium transition-colors">
              Manicure/Pedicure </button>
            <button
              @click="activeTab = 'Rzęsy/Brwi'"
              :class="activeTab === 'Rzęsy/Brwi' ? 'bg-zinc-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
              class="px-4 py-2 rounded-lg text-lg font-medium transition-colors">
              Rzęsy/Brwi </button>
            <button
              @click="activeTab = 'Housing &amp;amp; Neighborhoods'"
              :class="activeTab === 'Housing &amp;amp; Neighborhoods' ? 'bg-zinc-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'"
              class="px-4 py-2 rounded-lg text-lg font-medium transition-colors">
              Housing &amp; Neighborhoods </button>
          </div>
        </div>
        <div class="space-y-8">
          <div x-show="activeTab === 'all' || activeTab === 'Fryzjer'" class="faq-section">
            <h2 class="text-xl sm:text-3xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-black">
              Fryzjer
            </h2>
            <div class="space-y-4">
              <div class="flex flex-wrap justify-between md:gap-5 md:justify-start items-center overflow-hidden border-b border-gray-500">
                <!-- 1 -->
                <button
                  @click="openItem = openItem === 'General_0' ? null : 'General_0'"
                  class="w-24 text-left py-4 flex justify-between items-center focus:outline-none">
                  <div class="flex flex-col justify-center items-center gap-2">
                    <img class="w-20 h-20 rounded-full" src="{{ asset('images/masters/alina.webp') }}" alt="">
                    <span class="font-medium text-lg"
                      :class="openItem === 'General_0' ? ' border-b-2 border-black' : ' '">Alina</span>
                  </div>
                </button>
                <!-- 2 -->
                <button
                  @click="openItem = openItem === 'General_1' ? null : 'General_1'"
                  class="w-24 text-left py-4 flex justify-between items-center focus:outline-none">
                  <div class="flex flex-col justify-center items-center gap-2">
                    <img class="w-20 h-20 rounded-full" src="{{ asset('images/masters/alinab.webp') }}" alt="">
                    <span class="font-medium text-lg"
                      :class="openItem === 'General_1' ? ' border-b-2 border-black' : ' '">Alina</span>
                  </div>
                </button>
                <!-- 3 -->
                <button
                  @click="openItem = openItem === 'General_2' ? null : 'General_2'"
                  class="w-24 text-left py-4 flex justify-between items-center focus:outline-none">
                  <div class="flex flex-col justify-center items-center gap-2">
                    <img class="w-20 h-20 rounded-full" src="{{ asset('images/masters/alinab.webp') }}" alt="">
                    <span class="font-medium text-lg"
                      :class="openItem === 'General_2' ? ' border-b-2 border-black' : ' '">Iryna</span>
                  </div>
                </button>
              </div>

              <!-- pr -->
              <div class="overflow-hidden  border-gray-500">
                <div x-cloak x-show="openItem === 'General_0'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    @foreach ($services as $service)
                    <div class="flex">
                      <span>{{ $service->name }}</span>
                      <span class="border-b-1 border-black border-dotted flex-1"></span>
                      <span> od {{ $service->price }} zł</span>
                    </div>
                    @endforeach

                  </div>
                </div>
                <div x-cloak x-show="openItem === 'General_1'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    <div class="flex">
                      <span>Koloryzacja jednolita </span>
                      <span class="border-b-1 border-black border-dotted flex-1"></span>
                      <span> od 180 zł</span>
                    </div>
                  </div>
                </div>
                <div x-cloak x-show="openItem === 'General_2'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    <div class="flex">
                      <span>Koloryzacja jednolita </span>
                      <span class="border-b-1 border-black border-dotted flex-1"></span>
                      <span> od 190 zł</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div x-show="activeTab === 'all' || activeTab === 'Manicure/Pedicure'" class="faq-section">
            <h2 class="text-xl sm:text-3xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-black">
              Manicure/Pedicure
            </h2>
            <div class="space-y-4">
              <div class="overflow-hidden border-b border-gray-500">
                <div class="flex flex-wrap gap-4">
                  <button
                    @click="openItem = openItem === 'Jana' ? null : 'Jana'"
                    class="w-24 text-left py-4 flex justify-between items-center focus:outline-none">
                    <div class="flex flex-col justify-center items-center">
                      <img class="w-20 h-20 rounded-full" src="{{ asset('images/masters/alina.webp') }}" alt="">
                      <span class="font-medium text-lg"
                        :class="openItem === 'Jana' ? ' border-b-2 border-black' : ' '">Jana</span>
                    </div>
                  </button>
                  <button
                    @click="openItem = openItem === 'Olga' ? null : 'Olga'"
                    class="w-24 text-left py-4 flex justify-between items-center focus:outline-none">
                    <div class="flex flex-col justify-center items-center">
                      <img class="w-20 h-20 rounded-full" src="{{ asset('images/masters/olga.jpg') }}" alt="">
                      <span class="font-medium text-lg"
                        :class="openItem === 'Olga' ? ' border-b-2 border-black' : ' '">Olga</span>
                    </div>
                  </button>
                </div>
                <div x-cloak x-show="openItem === 'Jana'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    <div class="flex">
                      <span>Manicure Hybrydowy</span>
                      <span class="flex-1 border-b-1 border-black border-dotted"></span>
                      <span>od 100 zł</span>
                    </div>
                  </div>
                </div>
                <div x-cloak x-show="openItem === 'Olga'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    <div class="flex">
                      <span>Manicure Hybrydowy</span>
                      <span class="flex-1 border-b-1 border-black border-dotted"></span>
                      <span>od 120 zł</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div x-show="activeTab === 'all' || activeTab === 'Rzęsy/Brwi'"
            class="faq-section">
            <h2 class="text-xl sm:text-3xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-black">
              Rzęsy/Brwi
            </h2>
            <div class="space-y-4">
              <div class="overflow-hidden border-b border-gray-500">
                <button
                  @click="openItem = openItem === 'Rzęsy/Brwi' ? null : 'Rzęsy/Brwi'"
                  class="w-24 text-left py-4 flex justify-between items-center focus:outline-none">
                  <div class="flex flex-col justify-center items-center">
                    <img class="w-20 h-20 rounded-full" src="{{ asset('images/masters/ksenia.webp') }}" alt="">
                    <span class="font-medium text-lg"
                      :class="openItem === 'Rzęsy/Brwi' ? ' border-b-2 border-black' : ' '">Ksenia</span>
                  </div>
                </button>
                <div x-cloak x-show="openItem === 'Rzęsy/Brwi'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    <div class="flex flex-wrap">
                      <span>Laminowanie brwi</span>
                      <span class="flex-1 border-b-1 border-black border-dotted"></span>
                      <span>120 zł</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div x-show="activeTab === 'all' || activeTab === 'Housing &amp;amp; Neighborhoods'"
            class="faq-section">
            <h2 class="text-xl sm:text-3xl font-bold text-gray-900 mb-4 pb-2 border-b-2 border-black">
              Housing &amp; Neighborhoods
            </h2>
            <div class="space-y-4">
              <div class="overflow-hidden border-b border-gray-500">
                <button
                  @click="openItem = openItem === 'Housing &amp; Neighborhoods_0' ? null : 'Housing &amp; Neighborhoods_0'"
                  class="w-full text-left py-4 flex justify-between items-center focus:outline-none">
                  <span class="font-medium text-lg">What are some of the best neighborhoods to live in?</span>
                  <svg
                    :class="openItem === 'Housing &amp; Neighborhoods_0' ? 'rotate-180' : ''"
                    class="transform transition-transform duration-200 w-5 h-5 text-zinc-700"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div x-cloak x-show="openItem === 'Housing &amp; Neighborhoods_0'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    Popular neighborhoods include Shadyside and Squirrel Hill for a mix of
                    residential and commercial spaces, Lawrenceville for its artsy vibe, and Mount
                    Washington for stunning city views.
                  </div>
                </div>
              </div>
              <div class="overflow-hidden border-b border-gray-500">
                <button
                  @click="openItem = openItem === 'Housing &amp; Neighborhoods_1' ? null : 'Housing &amp; Neighborhoods_1'"
                  class="w-full text-left py-4 flex justify-between items-center focus:outline-none">
                  <span class="font-medium text-lg">Is Pittsburgh a good city for families?</span>
                  <svg
                    :class="openItem === 'Housing &amp; Neighborhoods_1' ? 'rotate-180' : ''"
                    class="transform transition-transform duration-200 w-5 h-5 text-zinc-700"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>
                <div x-cloak x-show="openItem === 'Housing &amp; Neighborhoods_1'"
                  x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="opacity-0 transform -translate-y-2"
                  x-transition:enter-end="opacity-100 transform translate-y-0"
                  x-transition:leave="transition ease-in duration-200"
                  x-transition:leave-start="opacity-100 transform translate-y-0"
                  x-transition:leave-end="opacity-0 transform -translate-y-2"
                  class="py-8 px-8 border-t border-gray-100 bg-zinc-100">
                  <div class="prose prose-sm max-w-none text-black text-lg">
                    Yes, Pittsburgh is known for its family-friendly environment, good schools, and
                    many parks and cultural activities suitable for children.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>