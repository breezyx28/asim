<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function payment()
    {
        return view('pages.shopping.checkout');
    }

    public function submitPayment()
    {
        return back()->with('success', 'proccess suceeded');
    }
}
