<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Facilities</title>
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
                    <th>削除</th>
                </tr>
                @foreach ($facilities as $facility)
                <tr>
                    <td><a href="/facilities/{{ $facility->facility_id }}">{{ $facility->facility_name }}</a></td>
                    <td>{{ $facility->map_id }}</td>
                    <td>{{ $facility->floor }}</td>
                    <td>{{ $facility->img_path }}</td>
                    <td>{{ $facility->introduction }}</td>
                    <td>{{ $facility->business_hours }}</td>
                    <form action="/facilities/{{ $facility->facility_id }}" id="form_{{ $facility->facility_id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="button" onclick="deleteFacility({{ $facility->facility_id }})">削除</button> 
                        </td>
                    </form>
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
        
        <script>
            function deleteFacility(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>