<?php

namespace App\Http\Livewire;

//use App\Models\Product;
use App\Models\Paket;
use Livewire\WithPagination;
use Livewire\Component;
use Cart;

class ShopComponent extends Component
{   
	use WithPagination;
    public function render()
    {
    	$pakets = Paket::paginate(12);
    	return view('livewire.shop-component',['pakets'=>$pakets])->layout('layouts.base');
    	//$products = Product::paginate(12);
        //return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
}
