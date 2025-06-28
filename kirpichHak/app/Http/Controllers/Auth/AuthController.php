<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function authorization(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string|email|max:128',
            'password' => 'required|string|max:255|min:6',
        ]);

        if(Auth::attempt($fields, $request->boolean('rememberMe'))){
            $request->session()->regenerate();

            return redirect()->intended('home'); 
        }
        else{
            return back()
                ->withInput()
                ->withErrors(['email' =>'Такого пользователя не существует']);
        }
    }

    function exit(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('authorize');
    }
}
