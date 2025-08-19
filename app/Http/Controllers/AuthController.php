<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Show Register Form
    public function registerForm() {
        return view('Manualauth.register');
    }

    // Handle Registration
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:peoples,email',
            'password' => 'required|min:4',
        ]);

       $userId = DB::table('peoples')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // plain text
        ]);
              // Fetch the inserted user
    $user = DB::table('peoples')->where('id', $userId)->first();

    // Store in session
    Session::put('user', $user);

    return redirect()->route('dashboard');
    }


    // Show Login Form
    public function loginForm() {
        return view('Manualauth.login');
    }

    // Handle Login
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('peoples')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            Session::put('user', $user);
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['error' => 'Invalid email or password']);
        }
    }

    // Dashboard
    public function dashboard() {
        if (!Session::has('user')) {
            return redirect()->route('login.form')->withErrors(['error' => 'Please login first']);
        }
        $user = Session::get('user');
        return view('Manualauth.dashboard', compact('user'));
    }

    // Logout
    public function logout() {
        Session::forget('user');
        return redirect()->route('login.form')->with('success', 'Logged out successfully.');
    }
}
