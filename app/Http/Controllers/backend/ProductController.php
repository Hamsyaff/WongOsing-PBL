<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function ProductView()
    {
        return view('admin.backend.product');
    }


}
