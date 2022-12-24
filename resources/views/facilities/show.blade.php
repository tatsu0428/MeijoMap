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
            @foreach ($facility_news as $selected_facility_news)
                <div class='selected_facility_news'>
                    <h3 class='selected_facility_news_title'>
                        {{ $selected_facility_news->news_title }}
                    </h3>
                    <p class='selected_facility_news_content'>{{ $selected_facility_news->news_content }}</p>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/facilities/">戻る</a>
        </div>
    </body>
</html>