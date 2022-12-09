<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Produk', 'Nama_Produk', 'ID_Kategori', 'Harga_Jual_Produk', 'Harga_Beli_Produk', 'Stok_Barang'
    ];
}
