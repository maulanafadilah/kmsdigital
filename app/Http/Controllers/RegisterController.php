<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $page_title = 'Daftar';
        $action = __FUNCTION__;
		$bottom = false;
        $footer = false;
        $header = 'header-noback';

        return view('register.index', compact('page_title', 'action', 'bottom', 'footer', 'header'));
    }

    public function store(Request $request)
    {
        // return $request;
       $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nomor_telepon' => ['required', 'min:10', 'max:13', 'unique:users'],
            'password' => 'required|min:5|max:255',
            'role' => 'required',
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);

       $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Masuk ke Akun Anda!');

       return redirect('/login');
    }
}
