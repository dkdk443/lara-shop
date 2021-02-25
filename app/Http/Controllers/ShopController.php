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
        $sessionAll = session()->all();
        $cart = $sessionAll['item'];
        //カートの合計金額
        $i = 0;
        foreach($cart as $item) {
           $i += $item->price;
        }
        $sum = number_format($i);

        //カートの点数
        $count = count($cart);

        return view('shop.cart', [
            'cart' => $cart,
            'sum' => $sum,
            'count' => $count
        ]);
    }

//     public function calcTotalPrice()
//     {
//         $sessionAll = session()->all();
//         $price = $sessionAll['price'];
//         $sum = array_sum($price);

//     }
}
