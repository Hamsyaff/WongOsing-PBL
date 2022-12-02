<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function CheckoutView()
    {
        return view('admin.backend.checkout');
    }
}
