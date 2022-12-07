<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Building</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='building_name'>
            {{ $map->building_name }}
        </h1>
        <div class='shops'>
            @foreach ($shops as $shop)
                <div class='shop'>
                    <h2 class='shop_name'>
                        {{ $shop->shop_name }}
                    </h2>
                    <p class='introduction'>{{ $shop->introduction }}</p>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>