<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index',[
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product::create([
            'product_name' => $request->product_name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image_url' => $request->image_url
        ]);
        return redirect('/products');
    }

    public function edit()
    {
        return view('products.edit');
    }

    public function update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }

}
