<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;
use App\Models\User;

class OwnerDashboardComponent extends Component
{
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.owner.owner-dashboard-component',['users'=>$users])->layout('layouts.base');
    }
}
