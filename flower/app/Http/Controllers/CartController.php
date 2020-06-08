<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use App\Cart\Cart;

class CartController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('loginOrder');
//    }

    public function add(Cart $cart, $id){
       $products = Product::find($id);
       $cart->add($products);
       return redirect()->back();
    }

    public function remove(Cart $cart, $id){

        $cart->remove($id);
        return redirect()->back();
    }

    public function update(Cart $cart, $id){
        $quantity = request()->quantity ;
        if ($quantity > 0){
            $cart->update($id,$quantity);
        } else {
            $quantity = 1;
        }

        return redirect()->back();
    }
    public function clear(Cart $cart){
        $cart->clear();
        return redirect()->back();
    }

    public function view(){

     return view('frontend.cart');

    }

}
