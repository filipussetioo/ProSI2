<?php

namespace App\Http\Livewire\Admin;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithPagination;

class PromoComponent extends Component
{
	use WithPagination;
    public function render()
    {
    	$promo = Promo::paginate(10);
        return view('livewire.admin.promo-component',['promo'=>$promo])->layout('layouts.base');
    }
}