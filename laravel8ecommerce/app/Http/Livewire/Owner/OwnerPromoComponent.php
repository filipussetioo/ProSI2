<?php

namespace App\Http\Livewire\Owner;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerPromoComponent extends Component
{
	use WithPagination;
    public function render()
    {
    	$promo = Promo::paginate(5);
        return view('livewire.owner.owner-promo-component',['promo'=>$promo])->layout('layouts.base');
    }
}