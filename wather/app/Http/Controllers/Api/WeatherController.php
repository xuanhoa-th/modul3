<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('GET', 'api.openweathermap.org/data/2.5/weather?id=1581130&appid=61c0a94a36c4bf606ec31a457c2cdabd');
        } catch (GuzzleException $e) {
            dd($e->getMessage());
        }
        $weather = $response->getBody()->getContents();
        $data =  json_decode($weather);

        $c = $data->main->temp-273.15;
         return view('weather', compact('c'));


    }
}
