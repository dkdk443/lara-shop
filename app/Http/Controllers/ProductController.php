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

    public function show()
    {
        return view('products.show');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        # code...
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
