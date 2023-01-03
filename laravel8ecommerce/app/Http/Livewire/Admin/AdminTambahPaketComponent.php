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

    // public function create()
    // {
    //     $this->validate();
    //     Paket::create($this->modelData());
    //     $this->visibleModalForm = false;
    //     $this->resetFields();
    // }
    // public function modelData()
    // {
    //     return [
    //         'nama_paket' => $this->nama_paket,
    //         'harga' => $this->harga,
    //         'gambar_paket' => $this->gambar_paket,
    //         'deskripsi' => $this->deskripsi,
    //         'created_at' => $this->timestamp(),
    //         'updated_at' => $this->timestamp(),
    //     ];
    // }
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
        $imageName = Carbon::now()->timestamp. '.' .$this->gambar_paket->extension();
        $this->gambar_paket->storeAs('pakets',$imageName);
        $pakets->gambar_paket = $imageName;
        $pakets->deskripsi = $this->deskripsi;
        $pakets->created_at = Carbon::now()->timestamp;
        $pakets->updated_at = Carbon::now()->timestamp;
        // Paket::create([
        //     'nama_paket' => $this->nama_paket,
        //     'harga' => $this->harga,
        //     'gambar_paket' => $this->gambar_paket,
        //     'deskripsi' => $this->deskripsi,
        //     'created_at' => $this->timestamp(),
        //     'updated_at' => $this->timestamp(),
        // ]);
        // DB::commit();
        $pakets->save();
        // session()->flash('message','Paket berhasil ditambahkan!');
        // $validatedData = $this->validate([
        //     'nama_paket' => 'required',
        //     'harga' => 'required',
        //     'gambar_paket' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'deskripsi' => 'required',
        //     'created_at' => Carbon::now()->timestamp,
        //     'updated_at' => Carbon::now()->timestamp,
        // ]);

        // $validatedData['name'] = $this->file->store('gambar_paket','public');

        // Paket::create($validatedData);
        // session()->flash('message','Paket berhasil ditambahkan!');
    }
}
