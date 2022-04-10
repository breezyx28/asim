<?php

namespace App\Http\Livewire\ProductDetails;

use Livewire\Component;

class Create extends Component
{
    public $items;

    public function mount()
    {
        $this->items = \App\Models\Product::all();
    }

    public function render()
    {
        return view('livewire.product-details.create', [
            'products' => $this->items
        ]);
    }
}
