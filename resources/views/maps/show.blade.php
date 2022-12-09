<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $map->building_name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='building_name'>
            {{ $map->building_name }}
        </h1>
        
        <div class='facilities'>
            <h2>Facilities</h2>
            @foreach ($facilities as $facility)
                <div class='facility'>
                    <h3 class='facility_name'>
                        <a href="/facilities/{{ $facility->facility_id }}">{{ $facility->facility_name }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
        
        <div class='cafeterias'>
            <h2>Cafeterias</h2>
            @foreach ($cafeterias as $cafeteria)
                <div class='cafeteria'>
                    <h3 class='cafeteria_name'>
                        <a href="/cafeterias/{{ $cafeteria->cafeteria_id }}">{{ $cafeteria->cafeteria_name }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
        
        <div class='shops'>
            <h2>Shops</h2>
            @foreach ($shops as $shop)
                <div class='shop'>
                    <h3 class='shop_name'>
                        <a href="/shops/{{ $shop->shop_id }}">{{ $shop->shop_name }}</a>
                    </h3>
                </div>
            @endforeach
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>