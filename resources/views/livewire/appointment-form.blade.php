<div class="max-w-lg mx-auto p-6 bg-white rounded shadow space-y-4">
  <h2 class="text-xl font-bold">Записатися на послугу</h2>

  <div>
    <label>Оберіть майстра:</label>
    <select wire:model="selectedMaster" class="w-full border rounded p-2">
      <option value="">-- Оберіть майстра --</option>
      @foreach ($masters as $master)
      <option value="{{ $master->id }}">{{ $master->name }}</option>
      @endforeach
    </select>
  </div>

  <div>
    <label>Оберіть послугу:</label>
    <select wire:model="selectedService" class="w-full border rounded p-2">
      <option value="">-- Оберіть послугу --</option>
      @foreach ($services as $service)
      <option value="{{ $service->subcategory_id }}">{{$service->subcategory_id}}-{{ $service->name }} ({{ $service->price }} грн)</option>
      @endforeach
    </select>
  </div>

  <div>
    <label>Оберіть дату:</label>
    <input type="date" wire:model="selectedDate" class="w-full border rounded p-2">
    @error('selectedDate') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
  </div>

  <div>
    <label>Оберіть час:</label>
    <input type="time" wire:model="selectedTime" class="w-full border rounded p-2">
    @error('selectedTime') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
  </div>

  <button wire:click="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
    Записатися
  </button>
 
  @if (session()->has('success'))
  <div class="p-4 bg-green-100 text-green-800 rounded">
    {{ session('success') }}
  </div>
  @endif
</div>