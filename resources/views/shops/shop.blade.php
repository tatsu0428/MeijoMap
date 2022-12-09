<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Building</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='shop_name'>
            {{ $shop->shop_name }}
        </h1>
        
        <div class='items'>
            <h2>おすすめ商品</h2>
            @foreach ($items as $item)
                <div class='item'>
                    <h3 class='item_name'>
                        {{ $item->item_name }}
                    </h3>
                    <p class='item_price'>{{ $item->item_price }}</p>
                    <p class='sold_out'>{{ $item->sold_out }}</p>
                </div>
            @endforeach
        </div>
        
        <div class='shop_news'>
            <h2>ニュース</h2>
            @foreach ($shop_news as $selected_shop_news)
                <div class='selected_shop_news'>
                    <h3 class='selected_shop_news_title'>
                        {{ $selected_shop_news->news_title }}
                    </h3>
                    <p class='selected_shop_news_content'>{{ $selected_shop_news->news_content }}</p>
                </div>
            @endforeach
        </div>