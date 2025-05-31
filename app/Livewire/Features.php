<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Feature; // <-- імпортуємо правильну модель

class Features extends Component // <-- зміна назви компонента
{
  public function render()
  {
    $features = Feature::all(); // <-- використовуємо модель Feature

    return view('livewire.features', compact('features'));
  }
}
