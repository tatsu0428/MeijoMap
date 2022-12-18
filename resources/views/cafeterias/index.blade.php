<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Cafeterias</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Cafeterias</h1>
        <div class='cafeterias'>
            <table border="1">
                <tr>
                    <th>食堂名</th>
                    <th>マップID</th>
                    <th>場所</th>
                    <th>画像パス</th>
                    <th>紹介文</th>
                    <th>営業時間</th>
                    <th>混雑状況</th>
                </tr>
                @foreach ($cafeterias as $cafeteria)
                <tr>
                    <td>{{ $cafeteria->cafeteria_name }}</td>
                    <td>{{ $cafeteria->map_id }}</td>
                    <td>{{ $cafeteria->floor }}</td>
                    <td>{{ $cafeteria->img_path }}</td>
                    <td>{{ $cafeteria->introduction }}</td>
                    <td>{{ $cafeteria->business_hours }}</td>
                    <td>{{ $cafeteria->congestion_situation }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="cafeteria_create">
            <p class="create">
                @csrf
                <a href="/cafeterias/create">create</a>
            </p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>