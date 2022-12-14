<?php

namespace App\Http\Livewire\Owner;

use App\Models\Promo;
use Livewire\Component;

class OwnerTambahPromoComponent extends Component
{
	public $nama_promo;
	public $potongan_promo;
	public $deskripsi_promo;
	public $kode_promo;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $id_tipe_pelanggan;

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
		$promo->id_tipe_pelanggan = $this->id_tipe_pelanggan;
		$promo->save();
		session()->flash('message','Promo telah ditambahkan!');
	}

    public function render()
    {
        return view('livewire.owner.owner-tambah-promo-component')->layout('layouts.base');
    }
}
