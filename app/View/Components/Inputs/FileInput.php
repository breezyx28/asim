<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class FileInput extends Component
{
    public $name;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title)
    {
        $this->name = $name;
        $this->title = $title ? $title : 'إختر صورة';
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
