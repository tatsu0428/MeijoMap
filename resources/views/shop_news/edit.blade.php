<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit News</title>
    </head>
    <body>
        <h1>Edit News</h1>
        <form action="/shop_news/{{ $shop_news->news_id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="title">
                <h2>News Title</h2>
                <input type="text" name="news_title" value="{{ $shop_news->news_title }}"/>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <p>{{ $shop_news->img_path }}</p>
                <input type="file" name="image">
            </div>
            
            <div class="content">
                <h2>Content</h2>
                <textarea name="news_content">{{ $shop_news->news_content }}</textarea>
            </div>
            
            <input type="submit" value="store"/>
        </form>
        
        <div class="footer">
            <a href="/shop_news/{{ $shop_news->news_id }}">戻る</a>
        </div>
        
    </body>
</html>