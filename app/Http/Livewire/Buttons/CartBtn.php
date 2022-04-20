<?php

namespace App\Http\Livewire\Buttons;

use App\Http\Services\BasketService;
use App\Http\Services\CartService;
use Livewire\Component;

class CartBtn extends Component
{
    public $cartCount = 0;

    protected $listeners = ['cartButton' => 'incrementCartCount'];

    public function mount()
    {
        $this->cartCount = CartService::allCount();

        // return $this->render();
    }

    public function incrementCartCount($id)
    {
        $cartItems = CartService::addToCart($id);
        $result = BasketService::addToBasket($id);

        $this->cartCount = count($cartItems);
    }

    public function render()
    {
        return view('livewire.buttons.cart-btn', [
            'total' => BasketService::totalPrice() ?? 0
        ]);
    }
}
