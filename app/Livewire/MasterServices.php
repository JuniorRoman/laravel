<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Service;
use App\Models\Master;

class MasterServices extends Component
{
    public $categories;
    public $subcategories;
    public $services;
    public $masters;
    public $activeTab = 'all';
    public $selectedMaster = null;
    public $filteredServices = [];
    public $filteredSubcategories = [];

    public function mount()
    {
        $this->categories = Category::all();
        $this->subcategories = Subcategory::all();
        $this->masters = Master::with('services')->get();
    }

    public function setTab($tab)
{
    $this->activeTab = $tab;

    // Отримати відфільтрованих майстрів
    $filteredMasters = $tab === 'all'
        ? $this->masters
        : $this->masters->filter(function ($master) use ($tab) {
            return $master->services->contains(function ($service) use ($tab) {
                return $service->category_id == $tab;
            });
        });

    $this->selectedMaster = $filteredMasters->first();

    // Отримати підкатегорії цієї категорії
    $this->filteredSubcategories = $this->selectedMaster
        ? $this->selectedMaster->services
            ->where('category_id', $tab)
            ->pluck('subcategory')
            ->unique()
        : collect();

    // Послуги обраного майстра по категорії
    $this->filteredServices = $this->selectedMaster
        ? $this->selectedMaster->services->where('category_id', $tab)
        : collect();
}


    public function selectMaster($id)
    {
        $this->selectedMaster = Master::with('services')->find($id);

        if ($this->selectedMaster) {
            $this->filteredServices = $this->activeTab === 'all'
                ? $this->selectedMaster->services
                : $this->selectedMaster->services->where('category_id', $this->activeTab);

            $this->filteredSubcategories = $this->filteredServices
                ->pluck('subcategory_id')
                ->unique()
                ->map(function ($id) {
                    return Subcategory::find($id);
                })->filter();
        } else {
            $this->filteredServices = [];
            $this->filteredSubcategories = [];
        }
    }

    public function render()
    {
        $filteredMasters = $this->activeTab === 'all'
            ? $this->masters
            : $this->masters->filter(function ($master) {
                return $master->services->pluck('category_id')->contains($this->activeTab);
            });

        return view('livewire.master-services', [
            'filteredMasters' => $filteredMasters,
            'filteredServices' => $this->filteredServices,
            'filteredSubcategories' => $this->filteredSubcategories,
        ]);
    }
}
