<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Cart\Cart;
use App\Order;
use App\OrderDetal;


class CheckoutController extends Controller
{

    public function __construct()
    {
    }



    public function form(){
        return view('frontend.checkout');
    }
    public function success(){
        return view('frontend.success');
    }

    public function submit_form(Request $request, Cart $cart ){
        if ($orders = Order::create([
            'account_id' => 1,
            'name' => 'nam'
        ])) {
            $order_id = $orders->id;
            foreach ($cart-> items as $product_id =>$item){
                $quantity = $item['quantity'];
                $price = $item['price'];
                OrderDetal::create([
                    'order_id' => $order_id ,
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                    'price' =>$price
                ]);
            }
            session(['cart' => '']);
            return redirect()->route('checkout.success')->with('dat hang thanh cong');
        } else {
            return redirect()->back()->with('dat hang khong thanh cong');
        }
    }
}
