<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $items = Product::all();
        return view('shop.index', [
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = Product::find($id);
        return view('shop.show', [
            'item' => $item
        ]);
    }

    public function addCart($id)
    {
        $item = Product::find($id);
        session()->push('item',$item);
        return redirect(route('shop.cart'));

    }

    public function cart()
    {
         $cart = session()->all();
        return view('shop.cart', [
            'cart' => $cart
        ]);
    }
}
