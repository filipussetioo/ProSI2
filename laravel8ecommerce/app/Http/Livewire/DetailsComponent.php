<?php

namespace App\Http\Livewire;

use App\Models\Paket;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $pakets = Paket::where('slug',$this->slug)->first();
        return view('livewire.details-component',['pakets'=>$pakets])->layout('layouts.base');
    }
    public function store($pakets_id,$pakets_name,$pakets_price)
    {
        Cart::add($pakets_id,$pakets_name,1,$pakets_price)->associate('App\Models\Paket');
        session()->flash('success_message','Item added to Cart');
        return redirect()->route('product.cart');
    }
}
