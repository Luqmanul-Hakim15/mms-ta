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
            session()->flash('message', 'Login berhasil!');
            session()->flash('type', 'success');

            return redirect()->route('surat-masuk');
        } else {
            return redirect()->route('login')->with('message', 'Email atau password salah')->with('type','error');
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

        session()->flash('message', 'Logout berhasil!');
        session()->flash('type', 'success');

        return redirect('/login');
    }
}
