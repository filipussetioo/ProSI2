<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Paket;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class OwnerTambahProductComponent extends Component
{
    use WithFileUploads;
    
    public $nama_paket;
    public $slug;
    public $deskripsi;
    public $long_desc;
    public $harga;
    public $gambar_paket;
    public $date_start;
    public $date_end;

    public function render()
    {
        // $paket = Paket::paginate(5);
        return view('livewire.owner.owner-tambah-product-component')->layout('layouts.base');;
    }
    public function addPaket()
    {
        $pakets = new Paket();

        $pakets->nama_paket = $this->nama_paket;
        $pakets->slug = Str::slug($this->nama_paket);
        $pakets->harga = $this->harga;
        $imageName = Carbon::now()->timestamp. '.' .$this->gambar_paket->extension();
        $this->gambar_paket->storeAs('pakets',$imageName);
        $pakets->gambar_paket = $imageName;
        $pakets->deskripsi = $this->deskripsi;
        $pakets->long_desc = $this->long_desc;
        $pakets->created_at = Carbon::now()->timestamp;
        $pakets->updated_at = Carbon::now()->timestamp;
        $pakets->date_start = $this->date_start;
        $pakets->date_end = $this->date_end;

        $pakets->save();
        
        session()->flash('message','Paket berhasil ditambahkan!');
        }
}
