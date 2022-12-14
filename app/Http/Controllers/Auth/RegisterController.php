<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:8'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
