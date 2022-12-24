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
                    <th>更新</th>
                    <th>削除</th>
                </tr>
                @foreach ($cafeterias as $cafeteria)
                <tr>
                    <td><a href="/cafeterias/{{ $cafeteria->cafeteria_id }}">{{ $cafeteria->cafeteria_name }}</a></td>
                    <td>{{ $cafeteria->map_id }}</td>
                    <td>{{ $cafeteria->floor }}</td>
                    <td>{{ $cafeteria->img_path }}</td>
                    <td>{{ $cafeteria->introduction }}</td>
                    <td>{{ $cafeteria->business_hours }}</td>
                    <form action="/cafeterias/{{ $cafeteria->cafeteria_id }}/congestion_situation" method="POST">
	                    @csrf
	                    @method('PUT')
	                    <td>
                            <select name="congestion_situation">
                                    @if ($cafeteria->congestion_situation == "空いている")
                                        <option selected>空いている</option>
                                        <option>混んでいる</option>
                                        <option>満席</option>
                                    @elseif ($cafeteria->congestion_situation == "混んでいる")
                                        <option>空いている</option>
                                        <option selected>混んでいる</option>
                                        <option>満席</option>
                                    @elseif ($cafeteria->congestion_situation == "満席")
                                        <option>空いている</option>
                                        <option>混んでいる</option>
                                        <option selected>満席</option>
                                    @else
                                        <option>空いている</option>
                                        <option>混んでいる</option>
                                        <option>満席</option>
                                    @endif
                            </select>
                        </td>
                        <td><input type="submit" value="更新"/></td>
	                </form>
	                <form action="/cafeterias/{{ $cafeteria->cafeteria_id }}" id="form_{{ $cafeteria->cafeteria_id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="button" onclick="deleteCafeteria({{ $cafeteria->cafeteria_id }})">削除</button> 
                        </td>
                    </form>
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
        
        <script>
            function deleteCafeteria(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>