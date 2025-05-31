<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use App\Models\Master;
use App\Models\Service;
use App\Models\Appointment;




class BookingStep extends Component
{
  public $categories;
  public $selectedCategory = null;
  public $masters = [];
  public $selectedMaster = null;
  public $services = [];
  public $availableTimes = [];
  public $selectedDate = null;
  public $selectedTime = null;
  public $selectedService = null;
  public $clientName;
  public $clientEmail;
  public $clientPhone;

 

  public function mount()
  {
    $this->categories = Category::all();
  }

  public function updatedSelectedCategory()
  {
    $this->services = Service::where('category_id', $this->selectedCategory)->get();
    $this->masters = Master::whereHas('services', function ($q) {
      $q->where('category_id', $this->selectedCategory);
    })->get();

    $this->selectedMaster = null;
    $this->services = [];
    $this->availableTimes = [];
    $this->selectedDate = null;
    $this->selectedService = null;
  }

  public function updatedSelectedMaster()
  {
    if ($this->selectedMaster) {
      $master = Master::find($this->selectedMaster);
      $this->services = $master->services()
        ->where('category_id', $this->selectedCategory)
        ->get();
    }

    $this->selectedService = null;
    $this->availableTimes = [];
    $this->selectedDate = null;
  }

  public function updatedSelectedService()
  {
    $this->availableTimes = [];
    if ($this->selectedDate) {
      $this->updatedSelectedDate();
    }
  }

  public function updatedSelectedDate()
  {
    if (!$this->selectedService || !$this->selectedMaster) {
      $this->availableTimes = [];
      return;
    }

    $service = Service::find($this->selectedService);
    if (!$service) {
      $this->availableTimes = [];
      return;
    }

    $serviceDuration = $service->duration;

    $workStart = Carbon::createFromFormat('H:i', '09:00');
    $workEnd = Carbon::createFromFormat('H:i', '19:00');

    $allTimes = [];
    $current = $workStart->copy();

    while ($current->copy()->addMinutes($serviceDuration)->lte($workEnd)) {
      $allTimes[] = $current->format('H:i');
      $current->addMinutes(30);
    }

    // Отримуємо всі існуючі записи майстра на цю дату
    $appointments = Appointment::where('master_id', $this->selectedMaster)
      ->where('date', $this->selectedDate)
      ->with('service')
      ->get();

    $blockedRanges = [];

    foreach ($appointments as $appointment) {
      $start = Carbon::createFromFormat('H:i:s', $appointment->time);
      $duration = $appointment->service->duration ?? 60;
      $end = $start->copy()->addMinutes($duration);
      $blockedRanges[] = [$start, $end];
    }

    $this->availableTimes = [];

    foreach ($allTimes as $time) {
      $start = Carbon::createFromFormat('H:i', $time);
      $end = $start->copy()->addMinutes($serviceDuration);

      $overlaps = false;

      foreach ($blockedRanges as [$blockedStart, $blockedEnd]) {
        // Перевірка на перетин: якщо наш слот перетинається з блокованим
        if ($start->lt($blockedEnd) && $end->gt($blockedStart)) {
          $overlaps = true;
          break;
        }
      }

      if (!$overlaps) {
        $this->availableTimes[] = $time;
      }
    }

    sort($this->availableTimes);
  }


  public function selectTime($time)
  {
    $this->selectedTime = $time;
  }

  public function confirmReservation()
  {
    $this->validate([
      'clientName' => 'required|string|max:255',
      'clientEmail' => 'required|email',
      'clientPhone' => 'required|string|max:20',
      'selectedCategory' => 'required',
      'selectedMaster' => 'required',
      'selectedService' => 'required',
      'selectedDate' => 'required|date',
      'selectedTime' => 'required',
    ]);

    Appointment::create([
      'client_name' => $this->clientName,
      'client_email' => $this->clientEmail,
      'client_phone' => $this->clientPhone,
      'category_id' => $this->selectedCategory,
      'master_id' => $this->selectedMaster,
      'service_id' => $this->selectedService,
      'date' => $this->selectedDate,
      'time' => $this->selectedTime,
    ]);

    session()->flash('success', 'Ваш запис успішно створено! Очікуйте підтвердження від майстра.');

    $this->reset([
      'selectedCategory',
      'selectedMaster',
      'selectedService',
      'selectedDate',
      'selectedTime',
      'clientName',
      'clientEmail',
      'clientPhone',
    ]);

    $this->dispatch('start-clear-timer'); // Подія для очищення через JS
  }

  #[\Livewire\Attributes\On('clearMessages')]
  public function clearMessages()
  {
    $this->dispatch('start-clear-timer');
  }

  public function render()
  {
    return view('livewire.booking-step');
  }
}
