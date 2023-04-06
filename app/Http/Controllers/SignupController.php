<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        auth()->login($user);

        return redirect()->route('allSauces');
    }
}
