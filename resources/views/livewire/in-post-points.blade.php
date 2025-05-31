<div class="p-4">
  <h2 class="text-lg font-bold mb-2">Wybierz paczkomat InPost</h2>

  <select wire:model="selectPoint" class="p-2 border rounded w-full">
      <option value="">-- Wybierz punkt --</option>
      @foreach($points as $point)
          <option value="{{ $point['name'] }}">
              {{ $point['name'] }} ({{ $point['location_description'] ?? 'brak miasta' }})
          </option>
          
      @endforeach
  </select>

  @if($selectedPoint)
      <div class="mt-4 p-4 bg-gray-100 rounded">
          <h3 class="font-bold text-md">Wybrany paczkomat:</h3>
          <p>{{ $selectedPoint }}</p>
      </div>
  @endif
</div>

