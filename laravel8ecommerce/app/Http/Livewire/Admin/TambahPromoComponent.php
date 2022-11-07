<?php

namespace App\Http\Livewire\Admin;

use App\Models\Promo;
use Livewire\Component;
use Illuminate\Support\Str;

class TambahPromoComponent extends Component
{
	public $nama_promo;
	public $potongan_promo;
	public $deskripsi_promo;
	public $kode_promo;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $tp_id;

	// public function generatenamapromo(){
	// 	$this->nama_promo = Str::nama_promo($this->name);
	// }



	public function storePromo(){
		$promo = new Promo();
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
        return view('livewire.admin.tambah-promo-component')->layout('layouts.base');
    }
}
