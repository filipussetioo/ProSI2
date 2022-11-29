<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Paket;
use Livewire\WithFileUploads;

class OwnerEditProductComponent extends Component
{
    use WithFileUploads;
    
    public $paket_id;
    public $nama_paket;
    public $deskripsi;
    public $harga;
    public $gambar_paket;
    public $newimage;

    public function render()
    {
        $paket = Paket::paginate(5);
        return view('livewire.owner.owner-edit-product-component',['paket'=>$paket])->layout('layouts.base');;
    }
    public function mount($paket_id){
		$this->paket_id = $paket_id;
		$paket = Paket::where('id',$paket_id)->first();
		$this->nama_paket = $paket->nama_paket;
		$this->harga = $paket->harga;
        $this->gambar_paket = $paket->gambar_paket;
		$this->deskripsi = $paket->deskripsi;
	}

	public function updateProduct(){
		 $paket = Paket::find($this->paket_id);
		 $paket->nama_paket = $this->nama_paket;
         $paket->harga = $this->harga;
         if($this->newimage)
         {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('pakets',$imageName);
            $paket->gambar_paket = $imageName;
         }
         $paket->deskripsi = $this->deskripsi;
		 $paket->save();
		 session()->flash('message','Paket telah diperbarui!');
	}
}
