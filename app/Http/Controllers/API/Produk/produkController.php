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
            'ID_Produk' => 'required',
            'Nama_Produk' => 'required',
            'ID_Kategori' => 'required',
            'Harga_Jual_Produk' => 'required',
            'Harga_Beli_Produk' => 'required',
            'Stok_Barang' => 'required',
        ]);


        $produk = new Produk([
            'ID_Produk' =>  $request->ID_Produk,
            'Nama_Produk' =>  $request->Nama_Produk,
            'ID_Kategori' =>  $request->ID_Kategori,
            'Harga_Jual_Produk' =>  $request->Harga_Jual_Produk,
            'Harga_Beli_Produk' =>  $request->Harga_Beli_Produk,
            'Stok_Barang' =>  $request->Stok_Barang,

        ]);

        $produk->save();

        return response()->json($produk, 201);
    }
}
