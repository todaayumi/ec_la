<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cart;

class CartController extends Controller
{
    public function store(Request $request){

        Cart::create([
            'stuck_id' => $request->id,
            'title' => $request->title,
            'price' => $request->price,
        ]);
        return redirect('/');
    }

    public function show(){

        $stucks = Cart::get();

        $total_price = Cart::select('price')->sum('price');

        return view('cart', compact('stucks', 'total_price'));
    }

    public function delete(Request $request){

        Cart::find($request->id)->delete();
        return redirect('cart');
    }

    public function drop(){

        \DB::table('carts')->delete();
        return redirect('/');
    }
}
