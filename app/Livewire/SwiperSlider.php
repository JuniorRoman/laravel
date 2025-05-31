<?php

namespace App\Livewire;

use Livewire\Component;



class SwiperSlider extends Component
{

  public array $images = [
    'https://picsum.photos/id/1011/5000/3333',
    'https://picsum.photos/id/1015/5000/3333',
    'https://picsum.photos/id/1018/5000/3333',
    'https://picsum.photos/id/1023/5000/3333',
  ];

    public function render()
    {
        return view('livewire.swiper-slider');
    }
}
