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
            'id' => 'required',
            'id_penjual' => 'required',
            'id_produk' => 'required',
            'no_transaksi' => 'required',
            'tgl_transaksi' => 'required',
            'banyak_transaksi' => 'required',
            'harga_jual_produk' => 'required',
        ]);

        // create user
        $penjualan = new Penjualan;
        $penjualan->id = $request->id;
        $penjualan->id_penjual = $request->id_penjual;
        $penjualan->id_produk = $request->id_produk;
        $penjualan->no_transaksi = $request->no_transaksi;
        $penjualan->tgl_transaksi = $request->tgl_transaksi;
        $penjualan->banyak_transaksi = $request->banyak_transaksi;
        $penjualan->harga_jual_produk = $request->harga_jual_produk;
        $penjualan->save();

        return response()->json($penjualan, 201);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'id_penjual' => 'required',
            'id_produk' => 'required',
            'no_transaksi' => 'required',
            'tgl_transaksi' => 'required',
            'banyak_transaksi' => 'required',
            'harga_jual_produk' => 'required',
        ]);

        // update user
        $penjualan = Penjualan::where('id', '=', $request->id)->first();
        $penjualan->id = $request->id;
        $penjualan->id_penjual = $request->id_penjual;
        $penjualan->id_produk = $request->id_produk;
        $penjualan->no_transaksi = $request->no_transaksi;
        $penjualan->tgl_transaksi = $request->tgl_transaksi;
        $penjualan->banyak_transaksi = $request->banyak_transaksi;
        $penjualan->harga_jual_produk = $request->harga_jual_produk;
        $penjualan->save();

        return response()->json($penjualan, 201);
    }

    public function delete(Request $request)
    {
        $penjualan = Penjualan::where('id', '=', $request->id)->first();

        if (!empty($penjualan)) {
            $penjualan->delete();

            return response()->json($penjualan, 200);
        } else {
            return response()->json([
                'error' => 'data tidak ditemukan'
            ], 404);
        }
    }
}
