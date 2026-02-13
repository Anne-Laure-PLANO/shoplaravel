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
        $total = 0 ;

        $cart = session('cart', []);

    foreach ($cart as $product) {
        $total += $product['quantity'] * $product['price'];
    }

        return view('carts.index', compact('cart', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addItem(Product $product)
    {
        $productId = $product['id'];
        $cart = collect(session('cart', []));
        if ($cart->has($productId)) {
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


    public function increaseQuantity(int $product_id)
    {
        $cart = collect(session('cart', []));
        if ($cart->has($product_id)){
            $cart = $cart->map(function ($item) use ($product_id) {
                if ($item['product_id'] === $product_id) {
                    $item['quantity']++;
                }
                return $item;
            });
            session(['cart' => $cart->toArray()]);
            return back()-> with('success', 'La quantité a bien été modifiée');

        } else {
        return back()-> with('error', 'Produit introuvable');
        }

    }

    public function decreaseQuantity(int $product_id)
    {
        $cart = session()->get('cart', []);
        if (!array_key_exists($product_id, $cart)) {
            return back()->with('error', 'Produit introuvable');
        }

        $currentQty = (int) ($cart[$product_id]['quantity'] ?? 0);
        if ($currentQty > 1) {
            $cart[$product_id]['quantity'] = $currentQty - 1;
        } else {
            unset($cart[$product_id]);
            session()->put('cart', $cart);
            return back()->with('success', 'produit supprimé');
        }

        session()->put('cart', $cart);
        return back()->with('success', 'La quantité a bien été modifiée');
    }

//
//
////            $cart = $cart->map(function ($item) use ($product_id) {
////                if ($item['product_id'] === $product_id) {
////                    if ($item['quantity'] <= 1) {
////                         $this->removeItem($product_id);
////
////
////
////                    } else {
////                        $item['quantity']--;
////                    }
////                }
////                return $item;
////            });
//            session(['cart' => $cart->toArray()]);
//            dd( $cart);
//            return back()-> with('success', 'La quantité a bien été modifiée');
//        } else {
//            return back()-> with('error', 'Produit introuvable');
//        }
//    }




    /**
     * Remove the specified resource from storage.
     */
    public function removeItem (int $product_id)
    {
        $cart = collect(session('cart', []));
        if ($cart->has($product_id)){
            $cart->forget($product_id);
            session(['cart' => $cart->toArray()]);
            return back()->with('success', 'produit supprimé du panier avec success');
            } else {
        return back()->with('error', 'Produit introuvable');
        }
    }

    public function clearCart()
    {
        session(['cart' => []]);
        return back()->with('success', 'Votre panier a bien été supprimé.');
    }
}
