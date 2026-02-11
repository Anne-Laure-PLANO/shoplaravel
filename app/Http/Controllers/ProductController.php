<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() # pour appeler le formulaire de création d'un nouveau produit
    {
        $categories = Category::all();
        return view('products/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) #récupère les infos nouveau produit pour insertion BDD
    {
        $product = $request->validated();

        $slug = Str::slug($product['name']);
        $slugDefinitif = $slug;
        $counter = 1;
        #Pour s'assurer d'avoir un slug unique
        while (Product::where('slug',$slug)->where('id','!=',$product['id'])->exists()) {
            $slugDefinitif = $slug . '-' . $counter;
            $counter++;
        };

        $product['slug'] = $slugDefinitif;

        Product::create($product);
    return redirect()->route('admin.dashboard')
        ->with('success', 'Produit créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) # récupère l'id
    {
        return view('.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::with('category')->findOrFail($id);
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $data = $request->validated();

        $slug = Str::slug($product['name']);
        $slugDefinitif = $slug;
        $counter = 1;
        #Pour s'assurer d'avoir un slug unique
        while (Product::where('slug',$slug)->where('id','!=',$product['id'])->exists()) {
            $slugDefinitif = $slug . '-' . $counter;
            $counter++;
        };

        $product['slug'] = $slugDefinitif;
        $product->update($data);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Produit modifié avec succès !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Produit supprimé avec succès !');
    }
}
