<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\InPostService;

class InpostPoints extends Component
{
    public $points = [];
    public $selectedPoint = null;

    public function mount(InPostService $inPostService)
    {
        $this->points = $inPostService->getPoints();
        
    }

    public function selectPoint($pointName)
    {
        $this->selectedPoint = $pointName;
    }

    public function render()
    {
        return view('livewire.in-post-points');
    }
}
