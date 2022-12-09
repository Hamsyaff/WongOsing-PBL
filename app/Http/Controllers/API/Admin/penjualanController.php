<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class penjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return response()->json($penjualan, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_penjual' => 'required',
            'id_produk' => 'required',
            'no_transaksi' => 'required',
            'tgl_transaksi' => 'required',
            'banyak_transaksi' => 'required',
            'harga_jual_produk' => 'required',
        ]);

        // create user
        $penjualan = new Penjualan([
            'id_penjual' =>  $request->id_penjual,
            'id_produk' =>  $request->id_produk,
            'no_transaksi' =>  $request->no_transaksi,
            'tgl_transaksi' =>  $request->tgl_transaksi,
            'banyak_transaksi' =>  $request->banyak_transaksi,
            'harga_jual_produk' =>  $request->harga_jual_produk,
        ]);

        $penjualan->save();

        return response()->json($penjualan, 201);
    }
}
