<?php

namespace App\Http\Livewire;

//use App\Models\Product;
use App\Models\Paket;
use Livewire\WithPagination;
use Livewire\Component;

class ShopComponent extends Component
{   
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,$product_price)->associate('App\Models\Paket');
        session()->flash('success_message','Item added to Cart');
        return redirect()->route('product.cart');
    }
	use WithPagination;
    public function render()
    {
    	$pakets = Paket::paginate(12);
    	return view('livewire.shop-component',['pakets'=>$pakets])->layout('layouts.base');
    	//$products = Product::paginate(12);
        //return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
}
