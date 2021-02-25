<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
}
