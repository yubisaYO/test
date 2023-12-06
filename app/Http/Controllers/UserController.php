<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        // dd('berhasil login');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }

        return back()->with('failed', 'Login Error');
    }

     public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255',
        ]);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successfully');

        return redirect('/login')->with('success', 'Registration successfully');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}

