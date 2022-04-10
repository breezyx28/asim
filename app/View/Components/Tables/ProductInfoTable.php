<?php

namespace App\View\Components\Tables;

use Illuminate\View\Component;

class ProductInfoTable extends Component
{
    public array $cols;
    public array $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cols, $items)
    {
        $this->cols = $cols;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.product-info-table');
    }
}
