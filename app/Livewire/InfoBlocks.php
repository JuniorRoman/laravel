<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\InfoBlock;
use App\Models\infoBlockBack;

class InfoBlocks extends Component
{

  public $info;
  public $infoblock;

  public function render()
    {
      $blocks = InfoBlock::with('back')->get();
      return view('livewire.info-blocks', compact('blocks'));
    }
}
