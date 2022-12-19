<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function checkUserType()
    {
        //  return view('admin.frontend.homepage');
        if (!Auth::user()) {
            return redirect()->route('home');
        }
        if (Auth::user()->type == 0) {
            return redirect()->route('user.home');
        }
        // if (Auth::user()->type == 1) {
        //     return redirect()->route('owner.dashboard');
        // }
        if (Auth::user()->type == 1) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
