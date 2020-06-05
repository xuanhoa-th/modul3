<?php


namespace App\Http\Controllers;


class DemoController extends Controller
{
    public function home(){
        $demo = 123456;
       return view('home', compact('demo'));
    }
    public function about(){
        return view('about');
    }
    public function product($id,$name){
        dd($name);

//        return view('product');
    }

}
