<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kurir;
use Livewire\Component;

class AdminEditKurirComponent extends Component
{
	public $kurir_id;
	public $nama_lengkap;
	public $alamat_lengkap;
	public $alamat_tambahan;
	public $nomor_handphone;
	public $email; 

	public function mount($kurir_id){
		$this->kurir_id = $kurir_id;
		$kurir = Kurir::where('id',$kurir_id)->first();
		$this->nama_lengkap = $kurir->nama_lengkap;
		$this->alamat_lengkap = $kurir->alamat_lengkap;
		$this->alamat_tambahan = $kurir->alamat_tambahan;
		$this->nomor_handphone = $kurir->nomor_handphone;
		$this->email = $kurir->email;
	}

	public function updateKurir(){
		 $kurir = Kurir::find($this->kurir_id);
		 $kurir->nama_lengkap = $this->nama_lengkap ;
		 $kurir->alamat_lengkap = $this->alamat_lengkap ;
		 $kurir->alamat_tambahan = $this->alamat_tambahan;
		 $kurir->nomor_handphone = $this->nomor_handphone;
		 $kurir->email = $this->email;
		 $kurir->save();
		session()->flash('message','Kurir telah diperbarui!');
	}

    public function render()
    {
        return view('livewire.admin.admin-edit-kurir-component')->layout('layouts.base');


    }
}
