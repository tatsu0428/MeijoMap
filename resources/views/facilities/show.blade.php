<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $facility->facility_name }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='facility_name'>
            {{ $facility->facility_name }}
        </h1>
        
        <p class='introduction'>
            {{ $facility->introduction }}
        </p>
        
        <h2 class='floor'>場所</h2>
        <p class='facility_floor'>
            {{ $facility->floor }}
        </p>
        
        <h2 class='business_hours'>営業時間</h2>
        <p class='facility_business_hours'>
            {{ $facility->business_hours }}
        </p>
        
        @if (Auth::user()->role_id == 2)
            <div class="edit">
                <a href="/facilities/{{ $facility->facility_id }}/edit">edit</a>
            </div>
        @endif
        
        <div class='facility_news'>
            <h2>ニュース</h2>
            <table>
                @foreach ($facility_news as $selected_facility_news)
                    <tr>
                        <td>{{ $selected_facility_news->created_at }}</td>
                        <td>
                            <a href="/facility_news/{{ $selected_facility_news->news_id }}">
                                {{ $selected_facility_news->news_title }}
                            </a>
                        </td>
                        <form action="/facility_news/{{ $selected_facility_news->news_id }}" id="form_{{ $selected_facility_news->news_id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td>
                                <button type="button" onclick="deleteFacilityNews({{ $selected_facility_news->news_id }})">削除</button> 
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            
            @if (Auth::user()->role_id == 2)
                <div class="edit">
                    <a href="/facility_news/{{ $facility->facility_id }}/create">create</a>
                </div>
            @endif
            
        </div>
        
        <div class="footer">
            <a href="/maps/{{ $facility->map_id }}">戻る</a>
        </div>
        
        <script>
            function deleteFacilityNews(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>