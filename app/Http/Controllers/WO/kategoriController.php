<?php

namespace App\Http\Controllers\WO;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();
        return response()->json($kategori, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'ID_Kategori' => 'required',
            'Nama_Kategori' => 'required',
            'Des_Kategori' => 'required',
        ]);

        $kategori = new kategori([
            'ID_Kategori' =>  $request->ID_Kategori,
            'Nama_Kategori' =>  $request->Nama_Kategori,
            'Des_Kategori' =>  $request->Des_Kategori,
        ]);

        $kategori->save();

        return response()->json($kategori, 201);
    }
}
