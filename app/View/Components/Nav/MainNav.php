<?php

namespace App\View\Components\Nav;

use App\Http\Services\BasketService;
use Illuminate\View\Component;

class MainNav extends Component
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
        return view('components.nav.main-nav');
    }
}
