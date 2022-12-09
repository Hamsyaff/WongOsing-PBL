<?php

namespace App\Http\Controllers\API\Type;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return response()->json($kategori, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_kategori' => 'required',
            'nama_kategori' => 'required',
            'des_kategori' => 'required',
        ]);

        // create user
        $kategori = new Kategori([
            'id_kategori' =>  $request->id_kategori,
            'nama_kategori' =>  $request->nama_kategori,
            'des_kategori' =>  $request->des_kategori,
        ]);

        $kategori->save();

        return response()->json($kategori, 201);
    }
}
