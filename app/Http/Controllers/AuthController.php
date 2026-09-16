<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }
    public function register(Request $request)
    {
     $validated=$request->validate([
         'name'=>'required|string|max:255',
         'email'=>'required|string|max:255|email',
         'password'=>'required|string|min:8||confirmed',
     ]);
     $user=User::create([
        'name'=>$validated['name'],
         'email'=>$validated['email'],
         'password'=>$validated['password']
     ]);
     auth()->login($user);
     return redirect('/');
    }
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|max:255|email',
            'password' => 'required|string|min:8'
        ]);
        $loginSuccessful = auth()->attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ]);
        if ($loginSuccessful) {
            return redirect('/');
        }

        return redirect('/login')->withErrors([
            'email' => 'بيانات الدخول غير صحيحة',
        ]);
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

}
