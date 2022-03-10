<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;
class AuthController extends Controller
{
    public function index()
    {
        return view('back.auth.login');
    }

    public function login(AuthRequest $request)
    {
        //dd ($request->all());
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('admin.home');
        }else{
            return back()->withErrors('Login və ya Parol səhvdir');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
