<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = Validator::make($request->all(), [
            'username' => 'required',
            'password'=> 'required'
        ]);

        if($credentials->fails())
        {
            return response()->json([
                return response()->json([
                    
            ]);
            return response()->json([
                'success' => false,
                'msgTitle' => 'tes',
                'msgBody' => 'Username dan atau password anda salah'
            ], 422);
        }

        return response()->json([
            'success' => true,
            'msgTitle' => 'Login Berhasil',
            'msgBody' => 'Login berhasil'
        ], 200);


    }
}
