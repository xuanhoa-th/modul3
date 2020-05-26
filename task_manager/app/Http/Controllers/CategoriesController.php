<?php


namespace App\Http\Controllers;


class CategoriesController
{
    public function index(){
        return view('category.list');
    }

}
