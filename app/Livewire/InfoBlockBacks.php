<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\InfoBlocks;

class InfoBlockBacks extends Component
{

    

    public function render()
    {
       $infoblock = infoBlockBack::all();
      
       return view('livewire.info-block-backs');
    }
}
