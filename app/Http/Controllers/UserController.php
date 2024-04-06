<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin() {
        return view("user.login");
    }

    public function login(Request $req) {
        $formFields = $req->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (auth()->attempt($formFields)) {
            $req->session()->regenerate();
            return redirect("/");
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials',
            'password' => 'Invalid Credentials',
        ])->onlyInput('email');
    }

    public function showRegister() {
        return view("user.register");
    }

    public function register(Request $req) {
        $formFields = $req->validate([
            "name" => ["required", "min:3", "max:30"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "confirmed", "min:6", "max:30"]
        ]);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect("/");
    }

     public function logout(Request $req){
        auth()->logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect("/");
    }
   
}

 // Common Resource Routes:
    // index - Get all
    // show - get single
    // create - form for post
    // store - post
    // edit - form for edit
    // update - edit
    // destroy - delete

