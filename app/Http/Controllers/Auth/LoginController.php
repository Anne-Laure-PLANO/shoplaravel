<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
        return view ('auth.login');
    }

    # récupère les données du formulaire d'authentification et détermine si accès autorisé
    public function testLog (Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $validated;
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)){
           $request->session()->regenerate();
           return redirect()->intended('home');
        } else {
            return back()->withErrors([
                'email' => "identifiant incorrect",
            ])->onlyInput('email');
        }


    }
}
