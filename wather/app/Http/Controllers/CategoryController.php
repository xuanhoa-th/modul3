<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use http\Env\Response;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
  public function index(){
      $category = Category::all();
      return view('category',compact('category'));
//

  }

    public function destroy($id){

        $category = Category::findOrFail($id);
        $category->delete();


        return response()->json(['status' => 'success']);
//        return view("category");
    }
}
