<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Paket;
use Livewire\WithFileUploads;

class AdminTambahPaketComponent extends Component
{
    use WithFileUploads;
    
    public $nama_paket;
    public $deskripsi;
    public $harga;
    public $gambar_paket;

    public function render()
    {
        // $paket = Paket::paginate(5);
        return view('livewire.admin.admin-tambah-paket-component')->layout('layouts.base');
    }
    public function addPaket()
    {
        $pakets = new Paket();

        $pakets->nama_paket = $this->nama_paket;
        $pakets->harga = $this->harga;

        if (!$gambar_paket->has('image')) {
            return response()->json(['message' => 'Missing file'], 422);
        }
        $imageName = Carbon::now()->timestamp. '.' .$this->gambar_paket->extension();
        $this->gambar_paket->storeAs('pakets',$imageName);
        $pakets->gambar_paket = $imageName;
        $pakets->deskripsi = $this->deskripsi;
        $pakets->created_at = Carbon::now()->timestamp;
        $pakets->updated_at = Carbon::now()->timestamp;

        $pakets->save();
        session()->flash('message','Paket berhasil ditambahkan!');
    }
}
