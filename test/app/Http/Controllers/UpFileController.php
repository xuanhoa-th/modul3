<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UpFileController extends Controller
{
    public function create(){

        return view('upfile');
    }
    public function up(Request $request){
      if ($request->hasFile('name')){
          $name = $request->name->getClientOriginalname();

          $request->name->move('uploads/',$name);

      }
//        return view('upfile');
    }

}
