<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('index', ['title' => 'ORS | Login']);
    }

    public function showRegisterForm()
    {
        return view('register', ['title' => 'ORS | Register']);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('nomors.index');
    }

    public function login(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     $request->flash();
        //     $request->session()->flash('success', 'Login berhasil!');
        //     return redirect()->intended('admin');
        // }else{
        //     $request->session()->flash('error', 'Login gagal! Periksa email atau password Anda.');
        //     return redirect()->back();
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Percobaan login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        // Jika login gagal, kembalikan dengan error tanpa flash input
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
