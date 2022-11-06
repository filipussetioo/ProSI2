<?php

namespace App\Http\Livewire\Owner;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class OwnerCategoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.owner.owner-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
