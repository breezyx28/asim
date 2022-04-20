<?php

namespace App\View\Components\Tables\Product;

use App\Models\Product;
use Illuminate\View\Component;

class index extends Component
{
    public $results;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->results = Product::with('category')->paginate(10);
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
                'results' => $this->results
            ]
        );
    }
}
