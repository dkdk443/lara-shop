<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
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
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:255',
            'detail' => 'required|unique:products',
            'price' => 'required|digits:8',
            'image_url' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('products/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $product = new Product();
        $product::create([
            'product_name' => $request->product_name,
            'detail' => $request->detail,
            'price' => $request->price,
            'image_url' => $request->image_url
        ]);
        return redirect('/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',[
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:255',
            'detail' => 'required|unique:products',
            'price' => 'required|digits:8',
            'image_url' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('products/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $product = product::find($id);
        $product->product_name = $request->product_name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->image_url = $request->image_url;
        $product->save();
        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect(route('products.index'));
    }

}
