<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonUp extends Component
{
    public $showButtonUp = false;
    public $scroll = 0;

    protected $listeners = [
      'scrollUpdated' => 'handleScroll',
  ];

    public function mount()
    {
        $this->scroll = session('scroll', 0);
        $this->watchScroll();
    }

    public function watchScroll()
    {
        $this->dispatch('scroll', ['scroll_value' => $this->scroll]);
    }

    public function handleScroll($scroll)
    {
        $this->scroll = $scroll;

        $this->showButtonUp = $scroll > 0;

        session(['scroll' => $scroll]);
    }

    public function goToTop()
    {
        return $this->js("window.scrollTo({ top: 0, behavior: 'smooth' });");
    }

    public function render()
    {
        return view('livewire.button-up');
    }
}
