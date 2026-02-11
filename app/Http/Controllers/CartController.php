<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_items;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * Pour afficher le panier
     */
    public function displayCart()
    {
        $cart = session('cart', []);


        return view('carts.index', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addItem(Product $product)
    {
        $cart = collect(session('cart', []));
        if ($cart->has($product->id)) {
            $cart = $cart->map(function ($item) use ($product) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity']++;
                }
                return $item;
            });
        } else {
            $cart->put($product->id, [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1,
            ]);
        }
        session(['cart' => $cart->toArray()]); // on convertit la collection en tableau

        return redirect('products')
            ->with('success', 'Le produit a bien été ajouté au panier');
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
