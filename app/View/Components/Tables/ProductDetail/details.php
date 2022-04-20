<?php

namespace App\View\Components\Tables\ProductDetail;

use App\Models\ProductDetail;
use Illuminate\View\Component;

class details extends Component
{
    public $productId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($productId)
    {
        $this->productId = $productId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.product-detail.details', [
            'results' => ProductDetail::where('product_id', $this->productId)->get()
        ]);
    }
}
