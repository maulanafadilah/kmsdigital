<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $page_title = 'Masuk';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = false;
        $header = 'header-noback';

        return view('login.index', compact('page_title', 'action', 'bottom', 'footer', 'header'));
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'nomor_telepon' => 'required',
            'password' => 'required',
            'role' => 'required|in:Orang Tua'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Gagal, Nomor Telepon atau Kata Sandi Salah!');
    }

    public function logout(){
        
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
