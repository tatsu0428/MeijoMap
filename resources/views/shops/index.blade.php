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
                </tr>
                @foreach ($shops as $shop)
                <tr>
                    <td>{{ $shop->shop_name }}</td>
                    <td>{{ $shop->map_id }}</td>
                    <td>{{ $shop->floor }}</td>
                    <td>{{ $shop->img_path }}</td>
                    <td>{{ $shop->introduction }}</td>
                    <td>{{ $shop->business_hours }}</td>
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
    </body>
</html>