<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Post News</title>
    </head>
    <body>
        <h1>Post News</h1>
        <form action="/cafeterias/{{ $cafeteria->cafeteria_id }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="title">
                <h2>News Title</h2>
                <input type="text" name="news_title" placeholder="ニュースのタイトル"/>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <input type="file" name="image">
            </div>
            
            <div class="news_content">
                <h2>Content</h2>
                <textarea name="news_content" placeholder="内容を入力してください．"></textarea>
            </div>
            
            <input type="submit" value="store"/>
        </form>
        
        <div class="footer">
            <a href="/cafeterias/{{ $cafeteria->cafeteria_id }}">戻る</a>
        </div>
        
    </body>
</html>