<?php

namespace App\Http\Livewire\Admin;

use App\Models\Promo;
use Livewire\Component;
use App\Models\TipePelanggan;

class AdminEditPromoComponent extends Component
{
	public $nama_promo;
	public $potongan_promo;
	public $deskripsi_promo;
	public $kode_promo;
	public $tanggal_mulai;
	public $tanggal_selesai;
	public $tp_id;
	public $promo_kode;
	public $promo_id;


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

	//rencana pakai kode promo

	public function mount($promo_kode){
		$this->promo_kode = $promo_kode;
		$promo = Promo::where('kode_promo',$promo_kode)->first();
		$this->promo_id = $promo->id;
		$this->nama_promo = $promo->nama_promo;
		$this->potongan_promo = $promo->potongan_promo;
		$this->deskripsi_promo = $promo->deskripsi_promo;
		$this->tanggal_mulai = $promo->tanggal_mulai;
		$this->tanggal_selesai = $promo->tanggal_selesai;
		$this->tp_id = $promo->tp_id;
	}

	public function update(){
		$promo = Promo::find($this->promo_id);
		$promo->nama_promo = $this->nama_promo;
		$promo->potongan_promo = $this->potongan_promo;
		$promo->deskripsi_promo = $this->deskripsi_promo;
		
		$promo->tanggal_mulai = $this->tanggal_mulai;
		$promo->tanggal_selesai = $this->tanggal_selesai;
		$promo->tp_id = $this->tp_id;
		$promo->save();
		session()->flash('message','Promo telah diperbarui!');
	}

    public function render()
    {
    	$tipe_pelanggans = TipePelanggan::all();

        return view('livewire.admin.admin-edit-promo-component',['tipe_pelanggans'=>$tipe_pelanggans])->layout('layouts.base');
    }
}
