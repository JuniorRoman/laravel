<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;

class MasterAppointments extends Component
{
  // Змінна, що містить список записів для майстра
  public $appointments;

  /**
   * Метод виконується при завантаженні компонента
   * Завантажує всі "pending" записи для поточного майстра
   */
  public function mount()
  {
    $this->loadAppointments();
  }

  /**
   * Метод для підтвердження запису
   * Змінює статус на 'confirmed'
   */
  public function confirm($id)
  {
    $appointment = Appointment::findOrFail($id);
    $appointment->status = 'confirmed';
    $appointment->save();

    // Можна додати логіку надсилання email або SMS
    session()->flash('message', 'Запис підтверджено');

    $this->loadAppointments(); // оновлюємо список
  }

  /**
   * Метод для відхилення запису
   * Змінює статус на 'rejected'
   */
  public function reject($id)
  {
    $appointment = Appointment::findOrFail($id);
    $appointment->status = 'rejected';
    $appointment->save();

    // Можна додати логіку надсилання повідомлення
    session()->flash('message', 'Запис відхилено');

    $this->loadAppointments(); // оновлюємо список
  }

  /**
   * Винесена логіка для завантаження записів
   */
  protected function loadAppointments()
  {
    $this->appointments = Appointment::with('service')
      ->where('master_id', auth()->id())
      ->where('status', 'pending')
      ->orderBy('date')
      ->orderBy('time')
      ->get();
  }

  /**
   * Метод рендеру компонента
   */
  public function render()
  {
    return view('livewire.master-appointments');
  }
}
