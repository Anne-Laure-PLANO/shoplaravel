<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $products = Product::all();
        return view('admin/adminDashboard', compact('products'));
    }

    public function modifyProduct($selection){
        $product = Product::find($selection);
        return view('admin/modifyProduct', compact('product'));
    }
//    public function userList(){
//        return view('user');
//
//    }

}
