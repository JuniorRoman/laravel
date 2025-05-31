<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Service;
use App\Models\Master;

class ServiceTabs extends Component
{
  public $categories;
  public $masters = [];

  public $services = [];
  public $selectedCategory = null;
  public $selectedMaster = null;
  public string $activeTab = 'all';
  public string|null $openItem = null;

  public function mount()
  {
    $this->categories = Category::with('services')->get();
    $this->masters = Master::all();
  }

  public function selectCategory($categoryId)
  {
    $this->selectedCategory = $categoryId;
    $this->selectedMaster = null;
  }

  public function selectMaster($masterId)
  {
    $this->selectedMaster = $masterId;
  }
  public function setTab(string $tab): void
  {
    $this->activeTab = $tab;
    $this->openItem = null;
  }

  public function toggleItem(string $item): void
  {
    $this->openItem = $this->openItem === $item ? null : $item;
  }

  public function render()
  {
    return view('livewire.service-tabs');
  }
}
