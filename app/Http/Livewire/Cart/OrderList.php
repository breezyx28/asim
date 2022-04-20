<?php

namespace App\Http\Livewire\Cart;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class OrderList extends Component
{
    public $ext = 0;
    protected $listeners = ['cartExtTotal'];

    public function cartExtTotal($ext)
    {
        $this->ext = $ext;
    }

    public function render()
    {
        return view('livewire.cart.order-list', [
            'items' => collect(Product::find(Session::get('cart'))),
            'ext' => $this->ext
        ]);
    }
}
