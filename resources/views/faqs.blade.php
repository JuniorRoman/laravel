@extends('layouts.app') @section('content')
<section
    class="container grid grid-cols-1 lg:grid-cols-2 py-5 bg-gray-50 mx-auto">
        <div class="flex flex-col gap-y-0 items-start mb-10 max-w-3xl">
          <h3 class="text-2xl font-bold leading-tight text-black sm:text-3xl lg:text-4xl mx-auto">Karty Lojalnośći</h3>
          <ul class=" m-2 md:mt-10">
            @foreach ($info_back as $item)
            <li class="grid grid-cols-1 md:grid-cols-2 p-4 mb-2 border-1 rounded-xl bg-slate-100 ">
                <div class="order-1 w-full text-center md:ml-3 md:text-start">
                    <h3 class="mb-1 text-slate-900 font-semibold text-sm">
                        <span class="mb-1 block  leading-6 text-indigo-500 text-center">{{$item->title}}</span>{{$item->subtitle}}
                    </h3>
                    <div class="text-sm text-slate-600 ">
                        <p>{{$item->rulles}}</p>
                    </div>
                </div>
                <div class="max-w-md flex mx-auto h-[150px]">
                  <img
                    src="{{$item->screen}}"
                    alt=""
                    class="mb-3 shadow-md rounded-lg mx-auto bg-slate-50 sm:mb-0"
                    >
                </div>
            </li>
            @endforeach
            
          </ul>
        </div>

        <div class="px-2 mx-auto sm:px-1 lg:px-2 max-w-2xl overflow-hidden">
            <div @click="open = !open" class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-bold leading-tight text-black sm:text-3xl lg:text-4xl">
                  Najczęściej zadawane pytania
                </h2>
            
            <div class=" mx-auto mt-8 space-y-4 md:mt-10">
                @foreach ($faqs as $item)
                <div
                    x-data="{open:false}"
                    class="transition-all duration-200 rounded-xl bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                    <button
                        @click="open = !open"
                        type="button"
                        class="flex items-center justify-between w-full px-4 py-2 sm:p-4">
                        <span class="flex text-md font-semibold text-blue-500">{{$item->title}}</span>
                        <svg
                            id="arrow1"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewbox="0 0 24 24"
                            stroke="currentColor"
                            class="w-6 h-6 text-gray-400">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div
                        x-cloak="x-cloak"
                        x-show="open"
                        class="p-2 sm:px-6 sm:pb-6 bg-violet-500 rounded-b-xl text-white text-md">
                        {{$item->description}}
                    </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </section>
    @endsection