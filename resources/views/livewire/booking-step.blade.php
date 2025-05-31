<div class="container mx-auto max-w-7xl p-6 bg-white rounded-lg shadow-md space-y-8">

  <!-- Основна сітка -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-3">

    <!-- Крок 1 -->
    <div class="flex flex-col">
      <h2 class="text-lg font-bold text-center">Step 1</h2>
      <div class="flex justify-center p-2 mb-2 font-bold rounded-tl-md rounded-bl-md {{ $selectedCategory ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
      <div class="space-y-4">
        <h2 class="text-lg font-bold border-b pb-2 text-center">Категорія</h2>
        <select wire:model.live="selectedCategory" class="border border-gray-300 rounded p-3 w-full">
          <option value="">-- Виберіть категорію --</option>
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <!-- Крок 2 -->
    <div class="flex flex-col">
      <h2 class="text-lg font-bold text-center">Step 2</h2>
      <div class="flex justify-center p-2 mb-2 font-bold {{ $selectedMaster ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
      <div class="space-y-4">
        <h2 class="text-lg font-bold border-b pb-2 text-center">Майстер</h2>
        <select wire:model.live="selectedMaster" class="border border-gray-300 rounded p-3 w-full" @disabled(!$selectedCategory)>
          <option value="">-- Виберіть майстра --</option>
          @foreach ($masters as $master)
          <option value="{{ $master->id }}">{{ $master->name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <!-- Крок 3 -->
    <div class="flex flex-col">
      <h2 class="text-lg font-bold text-center">Step 3</h2>
      <div class="flex justify-center p-2 mb-2 font-bold {{ $selectedService ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
      <div class="space-y-4">
        <h2 class="text-lg font-bold border-b pb-2 text-center">Послуга</h2>
        <select wire:model.live="selectedService" class="border border-gray-300 rounded p-3 w-full" @disabled(!$selectedMaster)>
          <option value="">-- Виберіть послугу --</option>
          @foreach ($services as $service)
          <option value="{{ $service->id }}">{{ $service->name }}</option>
          @endforeach
        </select>
      </div>
      @if ($selectedService)
      @php
      $service = \App\Models\Service::find($selectedService);
      @endphp

      @if ($service)
      <div class="mt-2 text-sm text-gray-600">
        ⏱️ Тривалість послуги: <strong>{{ $service->duration }}</strong> хвилин
      </div>
      @endif
      @endif
    </div>

    <!-- Крок 4 -->
    <div class="flex flex-col">
      <h2 class="text-lg font-bold text-center">Step 4</h2>
      <div class="flex justify-center p-2 mb-2 font-bold rounded-tr-md rounded-br-md {{ $selectedDate ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
      <div class="space-y-4">
        <h2 class="text-lg font-bold border-b pb-2 text-center">Дата</h2>

        <!-- Поле вибору дати -->
        <input
          type="date"
          wire:model.live="selectedDate"
          class="w-full p-3 border rounded"
          min="{{ now()->toDateString() }}"
          @disabled(!$selectedService)>


      </div>
    </div>



  </div>
  <!-- Список годин -->
  @if (!empty($availableTimes))
  <div class="flex flex-col w-full border border-gray-300 rounded-xl p-4">
    <h3 class="font-semibold mb-2 text-center">Доступні години:</h3>
    <div class="flex flex-wrap justify-between">
      @foreach ($availableTimes as $time)
      <button
        wire:click="selectTime('{{ $time }}')"
        class="p-2 border rounded hover:bg-blue-100 {{ $selectedTime == $time ? 'bg-blue-200 font-bold' : '' }}">
        {{ $time }}
      </button>
      @endforeach
    </div>
  </div>
  @endif
  <!-- Крок 5 -->
  <div class="flex justify-between">
    @if ($selectedTime)
    <div class="flex flex-col flex-1">
      <h2 class="text-lg font-bold text-center">Step 5</h2>
      <div class="flex mx-auto justify-center w-1/2  p-2 mb-2 font-bold bg-orange-400"></div>
      <div class="space-y-4">
        <h2 class="text-lg font-bold border-b pb-2 text-center">Ваші дані</h2>
        <div class="flex gap-2">
          <input
            type="text"
            wire:model.live="clientName"
            placeholder="Ваше ім'я"
            class="border border-gray-300 rounded p-3 w-full">

          <input
            type="email"
            wire:model.live="clientEmail"
            placeholder="Email"
            class="border border-gray-300 rounded p-3 w-full">

          <input
            type="text"
            wire:model.live="clientPhone"
            placeholder="Телефон"
            class="border border-gray-300 rounded p-3 w-full">
        </div>


        <!-- Кнопка підтвердження -->
        <button
          wire:click="confirmReservation"
          class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 disabled:bg-gray-300 transition mt-4">
          Підтвердити запис
        </button>
      </div>
    </div>
    @endif
  </div>

  <!-- Повідомлення -->
  @if (session()->has('success'))
  <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-lg" role="alert">
    {{ session('success') }}
  </div>
  @endif

  @if (session()->has('error'))
  <div class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg" role="alert">
    {{ session('error') }}
  </div>
  @endif

</div>