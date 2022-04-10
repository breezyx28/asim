<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class SelectOptions extends Component
{
    public $items;
    public $label, $id, $name, $required;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $label, $id, $name, $required = false)
    {
        $this->items = $items;
        $this->label = $label;
        $this->id = $id;
        $this->name = $name;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.select-options');
    }
}
