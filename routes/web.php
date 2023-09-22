<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard.index');
    });

    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
});

Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', function(){
        return view('auth.register');
    });
});
