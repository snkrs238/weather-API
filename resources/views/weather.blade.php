<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- セキュリティ --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>WetherForecast</title>
</head>
<body>
    <div class="title">
        <h1>WeatherForecast</h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>日付</th>
                @foreach ($time as $timeValue)
                    <th scope="col">{{$timeValue}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>WeatherCode</th>
                @foreach ($weatherCode as $weatherCodeValue)
                    <td scope="col">{{$weatherCodeValue}}</td>
                @endforeach
            </tr>
            <tr>
                <th>最高気温</th>
                @foreach ($temperature_2m_max as $temperature_2m_maxValue)
                    <td scope="col">{{$temperature_2m_maxValue}}</td>
                @endforeach
            </tr>
            <tr>
                <th>最低気温</th>
                @foreach ($temperature_2m_min as $temperature_2m_minValue)
                    <td scope="col">{{$temperature_2m_minValue}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>




    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>
</html>