<?php

namespace App\Http\Livewire;

use App\Http\Services\BasketService;
use Livewire\Component;

class QuantityControll extends Component
{

    public $count = 1;
    public $price, $itemId;

    public function plus()
    {
        $this->count++;
        $this->emitUp('qtyControll', $this->count);
        $this->emitTo('cart.order-list', 'cartExtTotal', ($this->count * $this->price) - $this->price);
        $result = BasketService::addQty($this->itemId, $this->count);
        return $this->render();
    }

    public function minus()
    {
        if ($this->count > 1) {
            $this->count--;
            $this->emitUp('qtyControll', $this->count);
            $this->emitTo('cart.order-list', 'cartExtTotal', ($this->count * $this->price) - $this->price);
            $result = BasketService::addQty($this->itemId, $this->count);
            return $this->render();
        }
    }

    public function render()
    {
        return view('livewire.quantity-controll');
    }
}
