<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Paket;

class AdminPaketComponent extends Component
{
    public function render()
    {
        $paket = Paket::paginate(5);
        return view('livewire.admin.admin-paket-component',['paket'=>$paket])->layout('layouts.base');;
    }
}
