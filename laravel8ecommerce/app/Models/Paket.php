<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'pakets';

    protected $fillable = [
        'nama_paket',
        'harga',
        'gambar_paket',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
