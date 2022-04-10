<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $label, $placeholder = "Input here", $value, $id, $name, $required;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $placeholder, $value = null, $id, $name, $required = false)
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
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
        return view('components.inputs.textarea');
    }
}
