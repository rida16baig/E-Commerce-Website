<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function submitLoginForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('customer.dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();

    }
    public function submitSignupForm(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:customer,vendor',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password,
        ]);

        auth()->login($user);

        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }elseif (auth()->user()->role == 'vendor') {
            return redirect()->route('vendor.dashboard');
        } else {
            return redirect()->route('customer.dashboard');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
