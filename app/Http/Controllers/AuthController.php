<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function signIn() {
        return view('auth.sign_in', [
            'title' => 'sign-in',
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'loginError' => 'Incorrect username or password.',
        ])->onlyInput('username');
    }

    public function register() {
        return view('auth.register', [
            'title' => 'register'
        ]);
    }

    public function registerPost(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:100',
            'password' => 'required|max:255|min:6',
            'name' => 'required|max:255',
            'age' => 'required',
        ]);

        if ($validatedData['age'] < 10) {
            return back()->withErrors([
                'ageRestriction' => "You are not old enough to make account",
            ]);
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('auth/sign-in/')->with('status', 'Registration successful! Please log in');
    }

    public function logout(Request $request) {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
