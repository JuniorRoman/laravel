<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CalendarBooking extends Component
{
  public $events = [];

  protected $listeners = ['loadEvents'];

  public function mount()
  {
    $this->loadEvents();
  }


  public function loadEvents()
  {
    // Тут має бути логіка отримання подій з бази даних
    // Для тесту додамо фейкові події
    $this->events = [
      [
        'title' => 'Запис 1',
        'start' => '2025-05-01T10:00:00',
        'end' => '2025-05-01T11:00:00',
      ],
      [
        'title' => 'Запис 2',
        'start' => '2025-05-02T12:00:00',
        'end' => '2025-05-02T13:00:00',
      ],
    ];
    $this->dispatchBrowserEvent('refreshCalendar');
  }

  public function render()
  {
    return view('livewire.calendar-booking');
  }
}
