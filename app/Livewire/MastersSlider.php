<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MasterSlider;

class MastersSlider extends Component
{

  public function render()
  {
    $masters = MasterSlider::all();

    return view('livewire.masters-slider', compact('masters'));
  }
}
