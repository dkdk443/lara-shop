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
}
