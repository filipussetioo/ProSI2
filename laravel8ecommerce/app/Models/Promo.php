<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    
    protected $table = "promo";

    protected $fillable = [
		'nama_promo',
		'potongan_promo',
		'deskripsi_promo',
		'kode_promo',
		'tanggal_mulai',
		'tanggal_selesai',
		'id_tipe_pelanggan',
    ];
}
