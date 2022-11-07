<?php

namespace App\Http\Livewire;

use App\Models\Paket;
use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;

class HomeComponent extends Component
{
	use WithPagination;
    public function render()
    {
        $products = Product::paginate(10);
        $pakets = Paket::paginate(5);
        /**
        return view('livewire.home-component',['pakets'=>$pakets])->layout('layouts.base');
        $products = Product::orderBy('created_at','DESC')->get()->take(8);
       **/
        return view('livewire.home-component',['products'=>$products])->layout('layouts.base');
        $products = Product::orderBy('created_at','DESC')->get()->take(8);
    }
}
