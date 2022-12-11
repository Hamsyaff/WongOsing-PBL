<?php

namespace App\Http\Controllers\WO;

use App\Http\Controllers\Controller;
use App\Models\pembelian;
use Illuminate\Http\Request;

class pembelianController extends Controller
{
    public function index()
    {
        $pembelian = pembelian::all();
        return response()->json($pembelian, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'ID_Pembelian' => 'required',
            'Tgl_Pembelian' => 'required',
            'Jumlah_Pembelian' => 'required',
            'Harga_Beli_Produk' => 'required',
            'ID_Produk' => 'required',
        ]);

        $pembelian = new pembelian([
            'ID_Pembelian' =>  $request->ID_Pembelian,
            'Tgl_Pembelian' =>  $request->Tgl_Pembelian,
            'Jumlah_Pembelian' =>  $request->Jumlah_Pembelian,
            'Harga_Beli_Produk' =>  $request->Harga_Beli_Produk,
            'ID_Produk' =>  $request->ID_Produk,
        ]);

        $pembelian->save();

        return response()->json($pembelian, 201);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'ID_Pembelian' => 'required',
            'Tgl_Pembelian' => 'required',
            'Jumlah_Pembelian' => 'required',
            'Harga_Beli_Produk' => 'required',
            'ID_Produk' => 'required',
        ]);

            $pembelian = pembelian::where('ID_Pembelian','=',$request->ID_Pembelian)->first();
            $pembelian->ID_Pembelian =$request->ID_Pembelian;
            $pembelian->Tgl_Pembelian =$request->Tgl_Pembelian;
            $pembelian->Jumlah_Pembelian =$request->Jumlah_Pembelian;
            $pembelian->Harga_Beli_Produk =$request->Harga_Beli_Produk;
            $pembelian->ID_Produk =$request->ID_Produk;

        $pembelian->save();

        return response()->json($pembelian, 201);
    }

    public function destroy(Request $request)
    {
       $pembelian= pembelian::where('ID_Produk', '=',$request->ID_Produk)->first();
       
       if(!empty($pembelian)){
        $pembelian->delete();

        return response()->json($pembelian, 200);

       }else{
        return response()->json([
            'error' => 'data tidak di temukan'
        ], 404);
       }
    }
}
