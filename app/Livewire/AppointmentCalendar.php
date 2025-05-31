<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;

class AppointmentCalendar extends Component
{
public $appointments = [];

public function mount()
{
$this->appointments = Appointment::all()->map(function ($appointment) {
return [
'id' => $appointment->id,
'title' => $appointment->client_name . ' - ' . $appointment->service,
'start' => $appointment->start_time,
'end' => $appointment->end_time,
];
});
}

public function render()
{
return view('livewire.appointment-calendar');
}
}