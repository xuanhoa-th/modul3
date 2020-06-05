<?php


namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    function index(){
        return view('Backend.category.list');
    }
    public function add(Request $request){
      Category::create([
          'name' =>$request->name
      ]);

    }

}
