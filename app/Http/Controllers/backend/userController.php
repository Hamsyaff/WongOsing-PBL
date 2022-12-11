<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function AboutView()
    {
        return view('user.backend.about');
    }

    public function ContactView()
    {
        return view('user.backend.contact');
    }
}
