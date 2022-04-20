<?php

namespace App\View\Components\Tables\user;

use App\Models\User;
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
        $this->results = User::paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.user.index', [
            'results' => $this->results
        ]);
    }
}
