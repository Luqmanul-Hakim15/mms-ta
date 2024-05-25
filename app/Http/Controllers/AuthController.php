<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'usname' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->usname,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('surat-masuk');
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah');
        };
    }
    public function register(Request $request) {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'position' => 'required|string',
            'usname' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'position' => $request->position,
            'username' => $request->usname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
    public function logout() {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login');
    }
}
