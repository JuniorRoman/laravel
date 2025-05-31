<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Component
{
  protected $fillable = [
    'start_time',
    'finish_time',
    'comments',
    'client_id',
    'employee_id',
  ];

  public function client(): BelongsTo
  {
    return $this->belongsTo(Client::class);
  }

  public function employee(): BelongsTo
  {
    return $this->belongsTo(Employee::class);
  }
}
