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
            {{ $shop_news->created_at }}
        </p>
        
        <h1 class='title'>
            {{ $shop_news->news_title }}
        </h1>
        
        <p class='content'>
            {{ $shop_news->news_content }}
        </p>
        
        <p class='img'>
            {{ $shop_news->img_path }}
        </p>
        
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->role_id == 2)
                    <div class="edit">
                        <a href="/shop_news/{{ $shop_news->news_id }}/edit">edit</a>
                    </div>
                @endif
            @else
            @endauth
        @endif
        
        <div class='footer'>
            <a href="/shops/{{ $shop_news->shop_id }}">戻る</a>
        </div>
        
    </body>
</html>