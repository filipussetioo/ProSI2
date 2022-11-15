<?php

namespace App\Http\Livewire\Admin;

use App\Models\Promo;
use Livewire\Component;

class AdminEditPromoComponent extends Component
{
	public $nama_promo;
	public $potongan_promo;
	public $deskripsi_promo;
	public $kode_promo;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $tp_id;

	// public function mount($promo_slug){
	// 	$promo = Promo::where('nama_promo',$promo_slug)->first();
	// 	$this->nama_promo = $promo->nama_promo;
	// 	$this->potongan_promo = $promo->potongan_promo;
	// 	$this->deskripsi_promo = $promo->deskripsi_promo;
	// 	$this->kode_promo = $promo->kode_promo;
	// 	$this->tanggal_mulai = $promo->tanggal_mulai;
	// 	$this->tanggal_selesai = $promo->tanggal_selesai;
	// 	$this->tp_id = $promo->tp_id;
	// }



	public function updatePromo(){
		$promo = Promo::find($this->id);
		$promo->nama_promo = $this->nama_promo;
		$promo->potongan_promo = $this->potongan_promo;
		$promo->deskripsi_promo = $this->deskripsi_promo;
		$promo->kode_promo = $this->kode_promo;
		$promo->tanggal_mulai = $this->tanggal_mulai;
		$promo->tanggal_selesai = $this->tanggal_selesai;
		$promo->tp_id = $this->tp_id;
		$promo->save();
		session()->flash('message','Promo telah ditambahkan!');
	}

    public function render()
    {
        return view('livewire.admin.admin-edit-promo-component')->layout('layouts.base');
    }
}
