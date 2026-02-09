<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $products = Product::all();
        $categories = Category::all();
        return view('admin.dashboard', compact('products'), compact('categories'));
    }

//    public function userList(){
//        return view('user');
//
//    }

}
