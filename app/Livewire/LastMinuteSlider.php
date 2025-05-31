<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Promo;
use App\Models\Marketing;


class LastMinuteSlider extends Component
{

public $market = [];
public $promos = [];

  public function mount()
  {
    $this->promos = Promo::all();
    $this->market = Marketing::all();
  }

    public function render()
    {
        return view('livewire.last_minute-slider');
    }
}
