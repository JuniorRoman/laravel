<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ParcelLockerSelect extends Component
{
    public string $city = '';
    public string $selectedLockerId = '';
    public array $cities = [];
    public array $lockers = [];
    public array $selectedLockerDetails = [];

    public function mount()
    {
        // Завантажуємо всі точки типу parcel_locker
        $response = Http::get('https://api-shipx-pl.easypack24.net/v1/points', [
            'type' => 'parcel_locker',
            'per_page' => 100000, // максимально велике значення
        ]);

        $items = $response->json()['items'] ?? [];
        
        // Витягуємо унікальні назви міст із адрес
        $this->cities = collect($items)
            ->pluck('address_details.city')
            ->filter() // фільтруємо null
            ->unique()
            ->sort()
            ->values()
            ->toArray();
    }

    public function updatedCity()
    {
        // Коли обране місто змінюється — завантажуємо пачкомати для нього
        $response = Http::get('https://api-shipx-pl.easypack24.net/v1/points', [
            'type' => 'parcel_locker',
            'city' => $this->city,
        ]);

        dd($response);
        $data = $response->json();
        // Якщо є список пачкоматів — оновлюємо
        if (isset($data['items']) && is_array($data['items'])) {
            $this->lockers = $data['items'];
        } else {
            $this->lockers = [];
        }

        // Скидаємо попередній вибір
        $this->selectedLockerId = '';
        $this->selectedLockerDetails = [];
    }

    public function updatedSelectedLockerId()
    {
        // Знаходимо повну інформацію про обраний пачкомат
        $locker = collect($this->lockers)->firstWhere('id', $this->selectedLockerId);
        $this->selectedLockerDetails = $locker ?? [];
    }

    public function render()
    {
        return view('livewire.parcel-locker-select');
    }
}
