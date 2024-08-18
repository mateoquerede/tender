<?php

namespace App\Http\Controllers;

use Http;

class InicioController extends Controller
{
    public function inicio() {

        // https://api.openweathermap.org/data/3.0/onecall?lat={lat}&lon={lon}&exclude={part}&appid={API key}
        $api = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'lat' => '-32.9468',
            'lon' => '-60.6393',
            'appid' => config('services.weather.key')
        ]);

//        dd($api->json());
        return view('index');
    }

}
