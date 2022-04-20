<?php

namespace App\View\Components\Tables\Order;

use App\Models\Order;
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
        return view('components.tables.order.index', [
            'results' => Order::paginate(10)
        ]);
    }
}
