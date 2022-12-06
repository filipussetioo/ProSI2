<?php

namespace App\Http\Livewire\Owner;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerProductComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.owner.owner-product-component',['products'=>$products])->layout('layouts.base');
    }
}
