<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class pembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all();
        return response()->json($pembelian, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_pembelian' => 'required',
            'tgl_pembelian' => 'required',
            'jumlah_pembelian' => 'required',
            'harga_beli_produk' => 'required',
            'id_produk' => 'required',
        ]);

        // create user
        $pembelian = new Pembelian([
            'id_pembelian' =>  $request->id_pembelian,
            'tgl_pembelian' =>  $request->tgl_pembelian,
            'jumlah_pembelian' =>  $request->jumlah_pembelian,
            'harga_beli_produk' =>  $request->harga_beli_produk,
            'id_produk' =>  $request->id_produk,
        ]);

        $pembelian->save();

        return response()->json($pembelian, 201);
    }
}
