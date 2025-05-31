<div>
  @if (session()->has('message'))
  <div class="alert alert-success">{{ session('message') }}</div>
  @endif

  <h2>Очікуючі записи</h2>
  @foreach ($appointments as $appointment)
  <div class="border p-2 my-2">
    <p>Клієнт: {{ $appointment->client_name ?? 'Клієнт не знайдений'}}</p>
    <p>Послуга: {{ $appointment->service->name ?? 'Послуга не знайдена'}}</p>
    <p>Дата: {{ $appointment->date }} о {{ $appointment->time }}</p>

    <button wire:click="confirm({{ $appointment->id }})">✅ Підтвердити</button>
    <button wire:click="reject({{ $appointment->id }})">❌ Відхилити</button>
  </div>
  @endforeach
</div>