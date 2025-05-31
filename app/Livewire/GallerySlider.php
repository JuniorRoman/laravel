<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class GallerySlider extends Component
{
   

    public function render()
    {
      $galleries = Gallery::all()->groupBy('category');
      return view('livewire.gallery-slider', compact('galleries'));
    }
}
