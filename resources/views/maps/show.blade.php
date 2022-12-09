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
            <h2>Shops</h2>
            @foreach ($shops as $shop)
                <div class='shop'>
                    <h3 class='shop_name'>
                        {{ $shop->shop_name }}
                    </h3>
                    <p class='shop_introduction'>{{ $shop->introduction }}</p>
                </div>
            @endforeach
        </div>
        
        <div class='cafeterias'>
            <h2>Cafeterias</h2>
            @foreach ($cafeterias as $cafeteria)
                <div class='cafeteria'>
                    <h3 class='cafeteria_name'>
                        {{ $cafeteria->cafeteria_name }}
                    </h3>
                    <p class='cafeteria_introduction'>{{ $cafeteria->introduction }}</p>
                </div>
            @endforeach
        </div>
        
        <div class='facilities'>
            <h2>Facilities</h2>
            @foreach ($facilities as $facility)
                <div class='facility'>
                    <h3 class='facility_name'>
                        {{ $facility->facility_name }}
                    </h3>
                    <p class='facility_introduction'>{{ $facility->introduction }}</p>
                </div>
            @endforeach
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>