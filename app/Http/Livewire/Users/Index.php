<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $user;
    public $search = '';

    public function mount(\App\Models\User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.users.index', [
            'results' => $this->user->search($this->search)->paginate(10)
        ]);
    }
}
