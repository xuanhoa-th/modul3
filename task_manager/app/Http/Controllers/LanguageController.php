<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use MongoDB\Driver\Session;


class LanguageController extends Controller
{
    public function setLocale(Request $request){
       $locate = $request->locate;
//       Session('locateLanguage', $locateLanguage);
        Session::put('locateLanguage',$locateLanguage);
       App::setLocale($locateLanguage);
       return back();

    }

}