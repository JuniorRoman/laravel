<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Master;
use App\Models\Service;
use App\Models\Appointment;

class AppointmentForm extends Component
{
  public $masters;
  public $services;

  public $selectedMaster = null;
  public $selectedService = null;
  public $selectedDate = null;
  public $selectedTime = null;

  public function mount()
  {
    $this->masters = Master::all();
    $this->services = Service::all();
  }

  public function submit()
  {
    $this->validate([
      'selectedMaster' => 'required|exists:masters,id',
      'selectedService' => 'required|exists:services,id',
      'selectedDate' => 'required|date|after_or_equal:today',
      'selectedTime' => 'required',
    ]);

    // Перевірка чи час зайнятий
    $exists = Appointment::where('master_id', $this->selectedMaster)
      ->where('date', $this->selectedDate)
      ->where('time', $this->selectedTime)
      ->exists();

    if ($exists) {
      $this->addError('selectedTime', 'Цей час уже зайнятий. Виберіть інший.');
      return;
    }

    Appointment::create([
      'master_id' => $this->selectedMaster,
      'service_id' => $this->selectedService,
      'date' => $this->selectedDate,
      'time' => $this->selectedTime,
    ]);

    session()->flash('success', 'Запис успішно створено!');

    $this->reset(['selectedMaster', 'selectedService', 'selectedDate', 'selectedTime']);
  }
  public function render()
  {
    return view('livewire.appointment-form');
  }
}
