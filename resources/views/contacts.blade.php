@extends('layouts.app')
  
@section('content')
<section class="relative z-0 bg-white dark:bg-gray-900">

  <div class="relative z-0 ">
      <div>
          <span class="absolute left-0 top-10 z-[-1]">
              <x-decor/>
          </span>
          <span class="absolute right-0 top-50 z-[-1]">
              <x-decor-r/>
          </span>
      </div>
      <div class="container px-6 py-10 mx-auto">
          <div class="lg:flex lg:items-center lg:-mx-10">
              <div class="lg:w-1/2 lg:mx-10">
                  <h1
                      class="text-xl md:text-2xl font-semibold text-gray-800 capitalize dark:text-white lg:text-3xl">Potrzebujesz pomocy ?
                  </h1>

                  <p class="text-xs md:text-base mt-4 text-gray-500 dark:text-gray-400">
                      Nasz zespół wsparcia skontaktuje się z Tobą jak najszybciej za pośrednictwem
                      poczty elektronicznej.
                  </p>
                  @if(session('success'))
                  <div
                      class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg"
                      role="alert">
                      {{ session('success') }}
                  </div>
                  @endif
                  <form class="mt-4 md:mt-12" method="POST" action="{{ route('contacts.send') }}">
                      @csrf
                      <div class="-mx-2 md:items-center md:flex">
                          <div class="flex-1 px-2">
                              <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                              <input
                                  type="text"
                                  name="name"
                                  placeholder="John Doe"
                                  class="block w-full px-5 py-2 lg:py-3 mt-2 text-md md:text-base text-gray-900 placeholder-gray-400 bg-gray-50 border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"/>
                          </div>

                          <div class="flex-1 px-2 mt-4 md:mt-0">
                              <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                              <input
                                  type="email"
                                  name="email"
                                  placeholder="johndoe@example.com"
                                  class="block w-full px-5 py-2 lg:py-3 mt-2 text-md md:text-base text-gray-700 placeholder-gray-400 bg-gray-50 border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"/>
                          </div>
                      </div>

                      <div class="w-full mt-4">
                          <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                          <textarea
                              name="message"
                              class="block w-full h-32 px-5 py-2 lg:py-3 mt-2 text-gray-700 placeholder-gray-400 bg-gray-50 border border-gray-200 rounded-md md:h-56 dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                              placeholder="Message"></textarea>
                      </div>

                      <button
                          class="w-full px-6 py-2 lg:py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gradient-to-r from-gray-400 via-purple-300 to-blue-200 rounded-md hover:bg-gradient-to-r [from-orange-500 via-pink-400 to-purple-600] focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                          get in touch
                      </button>
                  </form>
              </div>

              <div
                  class="mt-12 lg:flex lg:mt-0 lg:flex-col lg:items-center lg:w-1/2 lg:mx-10">
                  <img
                      class="hidden object-cover mx-auto rounded-full lg:block shrink-0 w-80 h-80"
                      src="https://images.unsplash.com/photo-1598257006458-087169a1f08d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                      alt="">

                  <div class="mt-6 space-y-4 md:mt-8 md:text-md text-wrap text-sm ">
                      <p class="flex items-start -mx-2">
                          <x-map-pin/>

                          <span class="mx-0 md:mx-2 text-gray-700 truncate w-72 dark:text-gray-400">
                              Łódż, ul. Retkińska 115/117, 94-004
                          </span>
                      </p>

                      <p class="flex items-start -mx-2">
                          <x-phone/>

                          <span class="mx-0 md:mx-2 text-gray-700 truncate w-72 dark:text-gray-400">
                              <a href="tel:+48736966582">+ 48 700 900 500</a>
                          </span>
                      </p>

                      <p class="flex items-start -mx-2">
                          <x-icon-mail/>

                          <span class="mx-0 md:mx-2 text-gray-700 truncate w-72 dark:text-gray-400">
                              <a href="mailto:b.atmosphera@gmail.com">b.atmosphera@gmail.com</a>
                          </span>
                      </p>
                  </div>

                  <div class="mt-6  md:mt-8 ">
                      <h3 class="text-gray-600 dark:text-gray-300 ">Follow us</h3>

                      <div class="flex mt-4 -mx-1.5 ">
                          <a
                              class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                              href="https://t.me/Koloryst"
                              target="_blank">
                              <x-icon-telegram/>
                          </a>

                          <a
                              class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                              href="https://www.facebook.com/hr.beautyy.hr/"
                              target="_blank">
                              <x-icon-fac/>
                          </a>

                          <a
                              class="mx-1.5 dark:hover:text-blue-400 text-gray-400 transition-colors duration-300 transform hover:text-blue-500"
                              href="https://instagram.com/atmosphere_beautyy?igshid=YmMyMTA2M2Y="
                              target="_blank">
                              <x-icon-inst/>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="flex flex-col justify-center items-center my-10">
              <h2 class="text-xl md:text-2xl font-bold my-10">Znajdź nas na mapie, aby łatwiej było zbudować trasę do naszego salonu</h2>
              <div class="grid grid-cols-1 w-full">
                  <iframe 
                    class="rounded-lg overflow-hidden w-full"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.2258270470056!2d19.402885974576353!3d51.74719399316001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a3579a71e183d%3A0xe940fe174c4f6fa7!2sBEAUTY%20ATMOSPHERE!5e0!3m2!1sru!2spl!4v1726470306033!5m2!1sru!2spl"
                      frameborder="0"
                      allowfullscreen=""
                      aria-hidden="false"
                      max-width="1200"
                      height="400"
                      tabindex="0"></iframe>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection