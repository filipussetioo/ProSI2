<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kurir;
use Livewire\Component;
use Illuminate\Support\Str;
;

class AdminTambahKurirComponent extends Component
{
	public $nama_lengkap;
	public $alamat_lengkap;
	public $alamat_tambahan;
	public $nomor_handphone;
	public $email; 


	public function storeKurir(){
		$kurir = new Kurir();
		$kurir->nama_lengkap = $this->nama_lengkap;
		$kurir->alamat_lengkap = $this->alamat_lengkap;
		$kurir->alamat_tambahan= $this->alamat_tambahan;
		$kurir->nomor_handphone = $this->nomor_handphone;
		$kurir->email = $this->email;
		$kurir->save();
		session()->flash('message','Kurir telah ditambahkan!');
	}


    public function render()
    {
        return view('livewire.admin.admin-tambah-kurir-component')->layout('layouts.base');
    }
}
