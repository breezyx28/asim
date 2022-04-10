<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuantityControll extends Component
{

    public $count = 1;

    public function plus()
    {
        $this->count++;
    }

    public function minus()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.quantity-controll');
    }
}
