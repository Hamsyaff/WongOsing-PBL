<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pembelian', 'tgl_pembelian',  'jumlah_pembelian', 'harga_beli_produk', 'id_produk'
    ];
}
