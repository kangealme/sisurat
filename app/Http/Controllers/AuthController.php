<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {

            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            return redirect('/')->with('msg','Login Gagal');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $pesan = array(
            'title' => 'Terimakasih',
            'text' => 'Anda Telah Logout',
            'icon' => 'info',
        );

        return redirect('/')->with('pesan', $pesan);
    }
}
