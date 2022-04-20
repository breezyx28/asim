<?php

namespace App\View\Components\Tables\Product;

use App\Models\Product;
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
        return view(
            'components.tables.product.index',
            [
                'results' => Product::with('category')->paginate(10)
            ]
        );
    }
}
