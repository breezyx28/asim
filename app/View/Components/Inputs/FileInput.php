<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class FileInput extends Component
{
    public $name;
    public $title;
    public $required = 'true';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title, $required = 'true')
    {
        $this->name = $name;
        $this->title = $title ? $title : 'إختر صورة';
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.file-input');
    }
}
