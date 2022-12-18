<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Shops</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Facilities</h1>
        <div class='facilities'>
            <table border="1">
                <tr>
                    <th>施設名</th>
                    <th>マップID</th>
                    <th>場所</th>
                    <th>画像パス</th>
                    <th>紹介文</th>
                    <th>営業時間</th>
                </tr>
                @foreach ($facilities as $facility)
                <tr>
                    <td>{{ $facility->facility_name }}</td>
                    <td>{{ $facility->map_id }}</td>
                    <td>{{ $facility->floor }}</td>
                    <td>{{ $facility->img_path }}</td>
                    <td>{{ $facility->introduction }}</td>
                    <td>{{ $facility->business_hours }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="facility_create">
            <p class="create">
                @csrf
                <a href="/facilities/create">create</a>
            </p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>