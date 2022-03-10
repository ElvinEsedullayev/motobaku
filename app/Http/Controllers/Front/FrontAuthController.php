<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class FrontAuthController extends Controller
{
    public function index()
    {
        return view('front.auth.login');
    }

     public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('front.home');
    }
}
