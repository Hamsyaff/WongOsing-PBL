<?php

namespace App\Http\Controllers\API\Cust;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class customersController extends Controller
{
    public function index()
    {
        $customer = Customers::all();
        return response()->json($customer, 200);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'id_customer' => 'required',
            'nama_customer' => 'required',
            'alamat_customer' => 'required',
            'telp_customer' => 'required',
        ]);

        // create user
        $customer = new Customers([
            'id_customer' =>  $request->id_customer,
            'nama_customer' =>  $request->nama_customer,
            'alamat_customer' =>  $request->alamat_customer,
            'telp_customer' =>  $request->telp_customer,
        ]);

        $customer->save();

        return response()->json($customer, 201);
    }
}
