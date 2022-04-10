<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('pages.shopping.cart');
    }
}
