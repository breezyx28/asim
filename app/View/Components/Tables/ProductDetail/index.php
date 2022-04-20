<?php

namespace App\View\Components\Tables\ProductDetail;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $productIDs = Product::all()->modelKeys();
        $productDetails__ProductIDs = ProductDetail::all()->pluck('product_id')->all();

        $filter = collect($productIDs)->filter(function ($value, $key) use ($productDetails__ProductIDs) {
            if (in_array($value, $productDetails__ProductIDs)) {
                return $value;
            }
        })->all();

        return view('components.tables.product-detail.index', [
            'products' => Product::whereIn('id', $filter)->paginate(10)
        ]);
    }
}
