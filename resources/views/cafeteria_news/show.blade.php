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
            {{ $cafeteria_news->created_at }}
        </p>
        
        <h1 class='title'>
            {{ $cafeteria_news->news_title }}
        </h1>
        
        <p class='content'>
            {{ $cafeteria_news->news_content }}
        </p>
        
        <p class='img'>
            {{ $cafeteria_news->img_path }}
        </p>
        
        <div class='footer'>
            <a href="/cafeterias/{{ $cafeteria_news->cafeteria_id }}">戻る</a>
        </div>
        
    </body>
</html>