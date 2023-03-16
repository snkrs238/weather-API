<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class weatherController extends Controller
{
    public function getWeather(){
        $url = "https://api.open-meteo.com/v1/forecast?latitude=35.69&longitude=139.69&hourly=temperature_2m&daily=weathercode,temperature_2m_max,temperature_2m_min&timezone=Asia%2FTokyo";
        $response = Http::get($url);

        $daily = $response['daily'];

        $time = $daily['time'];
        $weatherCode = $daily['weathercode'];
        $temperature_2m_max = $daily['temperature_2m_max'];
        $temperature_2m_min = $daily['temperature_2m_min'];

        // //storage/logs内でdailyのresponseの出力
        // \Log::channel('daily')->info($response);

        // \log::channel('daily')->info('----daily----');
        // \log::channel('daily')->info($daily);

        // \log::channel('daily')->info('----time----');
        // \log::channel('daily')->info($time);
        

        return view('weather')->with([
            'time' => $time,
            'weatherCode' => $weatherCode,
            'temperature_2m_max' => $temperature_2m_max,
            'temperature_2m_min' => $temperature_2m_min,
        ]);
    }
}
