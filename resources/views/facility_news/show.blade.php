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
        
        <div class='footer'>
            <a href="/facilities/{{ $facility_news->facility_id }}">戻る</a>
        </div>
        
    </body>
</html>