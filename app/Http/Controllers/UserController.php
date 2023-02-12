<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show register form
    public function create() {
        return view('users.register');
    }

    // Create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
        ]);

        // Hash password with bcrypt
        $formFields['password'] = bcrypt($formFields['password']);

        // Hi, dummy
        $formFields['name'] = 'dummy';

        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Account registered!');
    }

    // Logout
    public function logout(Request $request) {
        auth()->logout();

        // Regenerating tokens
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out!');
    }
}
