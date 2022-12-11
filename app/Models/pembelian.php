<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Pembelian','Tgl_Pembelian', 'Jumlah_Pembelian', 'Harga_Beli_Produk', 'ID_Produk'
    ];
}
