<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view ('auth.register');
    }
    public function createUser(Request $request){
        $request->validate([
            'lastName' => 'required|max:255|string',
            'firstName' => 'required|max:255|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[!@#$%^&*]/',
        ]);
        $hashedPassword = Hash::make($request->password);
        User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'password' => $hashedPassword,
        ]);
        Auth::login($user);
        return redirect(route('home'))->with('success','Inscription réussie');
    }
}
