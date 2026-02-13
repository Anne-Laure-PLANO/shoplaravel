<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        Auth::check();
        return view('accueil',);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

}
?>
