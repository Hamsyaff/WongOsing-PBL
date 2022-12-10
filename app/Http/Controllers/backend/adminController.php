<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function AboutView()
    {
        return view('admin.backend.about');
    }

    public function ContactView()
    {
        return view('admin.backend.contact');
    }
}
