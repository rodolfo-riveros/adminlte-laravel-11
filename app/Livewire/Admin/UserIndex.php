<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.admin.user-index', compact('users'));
    }
}
