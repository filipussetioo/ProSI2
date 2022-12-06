<?php

namespace App\Http\Livewire\Owner;

use App\Models\Menu;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerMenuComponent extends Component
{
	use WithPagination;
    public function render()
    {
    	$menus = Menu::paginate(5);
        return view('livewire.owner.owner-menu-component',['menus'=>$menus])->layout('layouts.base');
    }
}
