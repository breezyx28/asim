<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class Create extends Component
{
    public $items;

    public function mount()
    {
        $this->items = \App\Models\Category::all();
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
