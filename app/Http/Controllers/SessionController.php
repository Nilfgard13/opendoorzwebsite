<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{

    // public function showRegistrationForm()
    // {
    //     return view('auth.register');
    // }

    // // Memproses registrasi pengguna
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     Auth::login($user);

    //     return redirect()->route('dashboard')->with('success', 'Registration successful!');
    // }

    // // Menampilkan form login
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // // Memproses login pengguna
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('dashboard')->with('success', 'Login successful!');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    // // Memproses logout pengguna
    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/')->with('success', 'Logout successful!');
    // }

    // // Menampilkan form lupa password
    // public function showForgotPasswordForm()
    // {
    //     return view('auth.forgot-password');
    // }

    // // Memproses pengiriman link reset password
    // public function sendResetLinkEmail(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);

    //     $status = Password::sendResetLink(
    //         $request->only('email')
    //     );

    //     return $status === Password::RESET_LINK_SENT
    //         ? back()->with(['status' => __($status)])
    //         : back()->withErrors(['email' => __($status)]);
    // }

    // // Menampilkan form reset password
    // public function showResetForm(Request $request, $token = null)
    // {
    //     return view('auth.reset-password')->with([
    //         'token' => $token,
    //         'email' => $request->email,
    //     ]);
    // }

    // // Memproses reset password
    // public function resetPassword(Request $request)
    // {
    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email',
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $status = Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user) use ($request) {
    //             $user->password = Hash::make($request->password);
    //             $user->save();
    //         }
    //     );

    //     return $status === Password::PASSWORD_RESET
    //         ? redirect()->route('login')->with('status', __($status))
    //         : back()->withErrors(['email' => [__($status)]]);
    // }
}
