<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeView()
    {
        return view('admin.index');
    }

    public function Shopcart()
    {
        return view('admin.backend.shoping-cart');
    }
}
