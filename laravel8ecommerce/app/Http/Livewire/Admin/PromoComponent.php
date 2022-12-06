<?php

namespace App\Http\Livewire\Admin;

use App\Models\Promo;
use App\Models\TipePelanggan;
use Livewire\Component;
use Livewire\WithPagination;

class PromoComponent extends Component
{
	use WithPagination;

	// public function tpId(){
	// 	return $this->belongsTo(TipePelanggan::class, 'tp_id');
	// }

    public function render()
    {
    	$promo = Promo::paginate(10);
        return view('livewire.admin.promo-component',['promo'=>$promo])->layout('layouts.base');
    }

    public function tipepelanggannya()
    {
        return $this->belongsTo(App\Models\TipePelanggan::class);
    }

}