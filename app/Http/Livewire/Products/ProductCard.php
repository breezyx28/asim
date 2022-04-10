<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class ProductCard extends Component
{
    public $items;

    public function render()
    {
        return view('livewire.products.product-card');
    }
}
