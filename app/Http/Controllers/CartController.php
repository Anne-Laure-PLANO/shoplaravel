<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * Pour afficher le panier
     */
    public function displayCart()
    {

        return view('carts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addItem()
    {
        //
    }


    public function increaseQuantity()
    {
//

    }
    public function decreaseQuantity()
    {

    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function removeItem (string $id)
    {
        //
    }
    public function clearCart()
    {
        //
    }
}
