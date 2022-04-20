<?php

namespace App\Http\Controllers;

use App\Http\Services\BasketService;
use App\Http\Traits\ResourcesTrait;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use ResourcesTrait;

    public function payment()
    {
        return view('pages.shopping.checkout', [
            'paymentMethods' => \App\Models\PaymentMethod::all(),
            'totalPrice' => BasketService::totalPrice()
        ]);
    }

    public function submitPayment()
    {
        return back()->with('success', 'proccess suceeded');
    }

    // public function store(){

    //     return $this->StoreAction();

    // }
}
