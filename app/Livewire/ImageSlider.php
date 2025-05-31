<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
public array $images = [
    'https://cdn.pixabay.com/photo/2023/11/02/11/32/woman-8360359_1280.jpg',
    'https://cdn.pixabay.com/photo/2023/11/02/11/32/woman-8360359_1280.jpg',
    'https://cdn.pixabay.com/photo/2023/11/02/11/32/woman-8360359_1280.jpg',
];

public function render()
{
return view('livewire.image-slider');
}
}