<?php

namespace App\Http\Livewire;

use App\Models\Paket;
use Livewire\WithPagination;
use Livewire\Component;

class HomeComponent extends Component
{
	use WithPagination;
    public function render()
    {
    	$pakets = Paket::paginate(5);
        return view('livewire.home-component',['pakets'=>$pakets])->layout('layouts.base');
    }
}
