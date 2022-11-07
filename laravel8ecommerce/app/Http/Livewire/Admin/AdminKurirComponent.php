<?php

namespace App\Http\Livewire\Admin;
use App\Models\Kurir;
use Livewire\Component;
use Livewire\WithPagination;

class AdminKurirComponent extends Component
{
	use WithPagination;
    public function render()
    {
    	$kurir = Kurir::paginate(15);
        return view('livewire.admin.admin-kurir-component',['kurir'=>$kurir])->layout('layouts.base');
    }
}
