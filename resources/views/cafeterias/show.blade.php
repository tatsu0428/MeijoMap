<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $cafeteria->cafeteria_name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='cafeteria_name'>
            {{ $cafeteria->cafeteria_name }}
        </h1>
        
        <p class='introduction'>
            {{ $cafeteria->introduction }}
        </p>
        
        <h2 class='floor'>場所</h2>
        <p class='cafeteria_floor'>
            {{ $cafeteria->floor }}
        </p>
        
        <h2 class='business_hours'>営業時間</h2>
        <p class='shop_business_hours'>
            {{ $cafeteria->business_hours }}
        </p>
        
        <h2 class='congestion_situation'>現在の混雑状況</h2>
        <p class='cafeteria_congestion_situation'>
            {{ $cafeteria->congestion_situation }}
        </p>
        
        @if (Auth::user()->role_id == 2)
            <div class="edit">
                <a href="/cafeterias/{{ $cafeteria->cafeteria_id }}/edit">edit</a>
            </div>
        @endif
        
        <div class='menus'>
            <h2>おすすめメニュー</h2>
            @foreach ($menus as $menu)
                <div class='menu'>
                    <h3 class='menu_name'>
                        {{ $menu->menu_name }}
                    </h3>
                    <p class='menu_price'>{{ $menu->menu_price }}</p>
                    <p class='sold_out'>{{ $menu->sold_out }}</p>
                </div>
            @endforeach
        </div>
        
        <div class='cafeteria_news'>
            <h2>ニュース</h2>
            <table>
                @foreach ($cafeteria_news as $selected_cafeteria_news)
                    <tr>
                        <td>{{ $selected_cafeteria_news->created_at }}</td>
                        <td>
                            <a href="/cafeteria_news/{{ $selected_cafeteria_news->news_id }}">
                                {{ $selected_cafeteria_news->news_title }}
                            </a>
                        </td>
                        <form action="/cafeteria_news/{{ $selected_cafeteria_news->news_id }}" id="form_{{ $selected_cafeteria_news->news_id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td>
                                <button type="button" onclick="deleteCafeteriaNews({{ $selected_cafeteria_news->news_id }})">削除</button> 
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            
            @if (Auth::user()->role_id == 2)
                <div class="edit">
                    <a href="/cafeteria_news/{{ $cafeteria->cafeteria_id }}/create">create</a>
                </div>
            @endif
            
        </div>
        
        <div class="footer">
            <a href="/maps/{{ $cafeteria->map_id }}">戻る</a>
        </div>
        
        <script>
            function deleteCafeteriaNews(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>