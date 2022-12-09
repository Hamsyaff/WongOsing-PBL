<?php

namespace App\Http\Controllers\API\Produk;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return response()->json($produk, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_produk' => 'required',
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'harga_jual_produk' => 'required',
            'harga_beli_produk' => 'required',
            'stok_barang' => 'required',
        ]);


        $produk = new Produk([
            'id_produk' =>  $request->id_produk,
            'nama_produk' =>  $request->nama_produk,
            'id_kategori' =>  $request->id_kategori,
            'harga_jual_produk' =>  $request->harga_jual_produk,
            'harga_beli_produk' =>  $request->harga_beli_produk,
            'stok_barang' =>  $request->stok_barang,

        ]);

        $produk->save();

        return response()->json($produk, 201);
    }
}
