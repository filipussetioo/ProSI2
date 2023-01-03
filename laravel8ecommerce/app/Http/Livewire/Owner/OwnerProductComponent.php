<?php

namespace App\Http\Livewire\Owner;

use App\Models\Paket;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerProductComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $pakets = Paket::paginate(10);
        return view('livewire.owner.owner-product-component',['pakets'=>$pakets])->layout('layouts.base');
    }
}
