<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   public function create()
   {

       return view('post.create');
   }
    public function store(Request $request)
   {
        $validateData = $request->validate([
            'number' => 'required | numeric',
        ]);
        echo 'da xac  thuc thanh cong';
    }
}
