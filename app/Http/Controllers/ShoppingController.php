<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingController extends Controller
{
    public function list()
    {
        return view('pages.shopping.products', [
            'products' => Product::paginate(12)
        ]);
    }

    public function item()
    {
        return view('pages.shopping.product');
    }

    public function cart()
    {
        return view('pages.shopping.cart', [
            'cart' => Session::get('cart') ?? []
        ]);
    }
}
