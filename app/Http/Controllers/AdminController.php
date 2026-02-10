<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $products = Product::with('category')->get();
        return view('admin.dashboard', compact('products'));
    }

//    public function userList(){
//        return view('user');
//
//    }

}
