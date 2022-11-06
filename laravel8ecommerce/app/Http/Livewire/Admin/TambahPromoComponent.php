<?php

namespace App\Http\Livewire\Admin;

use App\Models\Promo;
use Livewire\Component;
use App\Post;

class TambahPromoComponent extends Component
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

	

	public function submit(){
		$promo = new Promo();
		$promo->nama_promo = $this->nama_promo;
		$promo->potongan_promo = $this->potongan_promo;
		$promo->deskripsi_promo = $this->deskripsi_promo;
		$promo->kode_promo = $this->kode_promo;
		$promo->tanggal_mulai = $this->tanggal_mulai;
		$promo->tanggal_selesai = $this->tanggal_selesai;
		$promo->id_tipe_pelanggan = $this->id_tipe_pelanggan;
		$promo->save();
		// session()->flash('message','Promo telah ditambahkan!');
		// $validatedData = $this->validate([
        //     'nama_promo' => 'required',
        //     'potongan_promo' => 'required',
        //     'deskripsi_promo' => 'required',
        //     'kode_promo' => 'required',
        //     'tanggal_mulai' => 'required',
        //     'tanggal_selesai' => 'required',
        //     'id_tipe_pelanggan' => 'required',
        // ]);
		// Promo::create([
		// 	'nama_promo' => $this->nama_promo,
        //     'potongan_promo' => $this->potongan_promo,
        //     'deskripsi_promo' => $this->deskripsi_promo,
        //     'kode_promo' => $this->kode_promo,
        //     'tanggal_mulai' => $this->tanggal_mulai,
        //     'tanggal_selesai' => $this->tanggal_selesai,
        //     'id_tipe_pelanggan' => $this->id_tipe_pelanggan,
		// ]);
		// session()->flash('success','Category Created Successfully!!');
		// Promo::create($validatedData);
        // session()->flash('message','Paket berhasil ditambahkan!');
	}

    public function render()
    {
        return view('livewire.admin.tambah-promo-component')->layout('layouts.base');
    }
}
