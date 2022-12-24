<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Shops</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Shops</h1>
        <div class='shops'>
            <table border="1">
                <tr>
                    <th>売店名</th>
                    <th>マップID</th>
                    <th>場所</th>
                    <th>画像パス</th>
                    <th>紹介文</th>
                    <th>営業時間</th>
                    <th>削除</th>
                </tr>
                @foreach ($shops as $shop)
                <tr>
                    <td><a href="/shops/{{ $shop->shop_id }}">{{ $shop->shop_name }}</a></td>
                    <td>{{ $shop->map_id }}</td>
                    <td>{{ $shop->floor }}</td>
                    <td>{{ $shop->img_path }}</td>
                    <td>{{ $shop->introduction }}</td>
                    <td>{{ $shop->business_hours }}</td>
                    <form action="/shops/{{ $shop->shop_id }}" id="form_{{ $shop->shop_id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="button" onclick="deleteShop({{ $shop->shop_id }})">削除</button> 
                        </td>
                    </form>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="shop_create">
            <p class="create">
                @csrf
                <a href="/shops/create">create</a>
            </p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        <script>
            function deleteShop(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>