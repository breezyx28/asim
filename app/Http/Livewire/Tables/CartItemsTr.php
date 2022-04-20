<?php

namespace App\Http\Livewire\Tables;

use Livewire\Component;

class CartItemsTr extends Component
{
    public $item = [];
    public $currentCount = 1;

    protected $listeners = ['qtyControll'];

    public function qtyControll($count)
    {
        $this->currentCount = $count;
    }

    public function render()
    {
        return view('livewire.tables.cart-items-tr', [
            'count' => $this->currentCount
        ]);
    }
}
