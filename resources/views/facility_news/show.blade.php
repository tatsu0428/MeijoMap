<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <p class='created_at'>
            {{ $facility_news->created_at }}
        </p>
        
        <h1 class='title'>
            {{ $facility_news->news_title }}
        </h1>
        
        <p class='content'>
            {{ $facility_news->news_content }}
        </p>
        
        <p class='img'>
            {{ $facility_news->img_path }}
        </p>
        
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->role_id == 2)
                    <div class="edit">
                        <a href="/facility_news/{{ $facility_news->news_id }}/edit">edit</a>
                    </div>
                @endif
            @else
            @endauth
        @endif
        
        <div class='footer'>
            <a href="/facilities/{{ $facility_news->facility_id }}">戻る</a>
        </div>
        
    </body>
</html>