<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        # afficher une vue du tableau de bord de l'administration
        return 'ceci est mon Dashboard... impressionnant, hein ? ';
    }

    public function userList(){
        return view('user');

    }

}
