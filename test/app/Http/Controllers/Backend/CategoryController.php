<?php


namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;


class BackEndController extends Controller
{
    function index(){
        return view('Backend.home');
    }

}
