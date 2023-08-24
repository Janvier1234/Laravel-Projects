<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function showWeather()
    {
        return view('weather');
    }

    public function getWeather(Request $request)
    {
        // Replace 'YOUR_API_KEY' with your actual OpenWeatherMap API key
        $apiKey = '79f10ef444e424b32aa9054fb8acbedb';
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        $url = "http://api.openweathermap.org/data/2.5/weather?q=Burundi&appid={$apiKey}";

        $client = new Client();
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('weather',compact('data'));
    }
    public function readJson(Request $request)
{

    $apiKey = '79f10ef444e424b32aa9054fb8acbedb';
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');   
     $url = "http://api.openweathermap.org/data/2.5/weather?q=Burundi&appid={$apiKey}";
        $jsonData = get($url);
        $data = json_decode($jsonData, true);
        return view('json.read', ['data' => $data]);
    }
}
