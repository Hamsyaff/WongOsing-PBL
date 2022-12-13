<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'id_penjual', 'id_produk', 'no_transaksi', 'tgl_transaksi', 'banyak_transaksi', 'harga_jual_produk'
    ];
}
