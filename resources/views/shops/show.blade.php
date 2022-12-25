<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $shop->shop_name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='shop_name'>
            {{ $shop->shop_name }}
        </h1>
        
        <p class='introduction'>
            {{ $shop->introduction }}
        </p>
        
        <h2 class='floor'>場所</h2>
        <p class='shop_floor'>
            {{ $shop->floor }}
        </p>
        
        <h2 class='business_hours'>営業時間</h2>
        <p class='shop_business_hours'>
            {{ $shop->business_hours }}
        </p>
        
        @if (Auth::user()->role_id == 2)
            <div class="edit">
                <a href="/shops/{{ $shop->shop_id }}/edit">edit</a>
            </div>
        @endif
        
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
            <table>
                @foreach ($shop_news as $selected_shop_news)
                    <tr>
                        <td>{{ $selected_shop_news->created_at }}</td>
                        <td>
                            <a href="/shop_news/{{ $selected_shop_news->news_id }}">
                                {{ $selected_shop_news->news_title }}
                            </a>
                        </td>
                        <form action="/shop_news/{{ $selected_shop_news->news_id }}" id="form_{{ $selected_shop_news->news_id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td>
                                <button type="button" onclick="deleteShopNews({{ $selected_shop_news->news_id }})">削除</button> 
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        
        <div class="footer">
            <a href="/maps/{{ $shop->map_id }}">戻る</a>
        </div>
        
        <script>
            function deleteShopNews(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>