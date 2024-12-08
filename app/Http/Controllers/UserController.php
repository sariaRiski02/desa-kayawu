<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'
        ]);

        if (!Auth::attempt($data)) {
            return redirect()->back()->with('error', 'Email atau Password Salah');
        }

        $user = User::where('email', $data['email'])->first();

        if ($user && Hash::check($data['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('berita');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah.');
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|confirmed|min:6',
            'email' => 'required|string|email|unique:users,email',
            'registration_code' => 'required|string',
        ]);

        if (!$data['registration_code'] === env('REGISTRATION_CODE')) {
            return redirect()->back()->with('error', 'code registrasi salah');
        }

        $user = User::create($data);

        if (!$user) {
            return redirect()->back()->with('error', 'Admin gagal dibuat');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
