<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('livewire.users', ['users' => $users]);
    }
}
