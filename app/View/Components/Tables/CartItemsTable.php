<?php

namespace App\View\Components\Tables;

use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class CartItemsTable extends Component
{
    public $cartProducts = [];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->cartProducts = \App\Models\Product::find(Session::get('cart'));

        return view('components.tables.cart-items-table', ['items' => $this->cartProducts ?? []]);
    }
}
