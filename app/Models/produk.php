<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_produk', 'nama_produk', 'id_kategori', 'harga_jual_produk', 'harga_beli_produk', 'stok_barang'
    ];
}
