<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{   
    public function destroy($rowId){
        Cart::remove($rowId);
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
