<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Meijo Map</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Meijo Map</h1>
        <h2>Building Name</h2>
        <div class='maps'>
            @foreach ($maps as $map)
                <div class='map'>
                    <h2 class='bulding_name'>{{ $map->building_name }}</h2>
                    <p class='introduction'>{{ $map->introduction }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>