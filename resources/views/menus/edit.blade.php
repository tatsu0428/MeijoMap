<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit Menu</title>
    </head>
    <body>
        <h1>Edit Menu</h1>
        <form action="/menus/{{ $cafeteria->cafeteria_id }}/{{ $menu->menu_id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="name">
                <h2>Menu Name</h2>
                <input type="text" name="menu_name" value="{{ $menu->menu_name}}"/>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <p>{{ $menu->img_path }}</p>
                <input type="file" name="image">
            </div>
            
            <div class="price">
                <h2>Menu Price</h2>
                <input type="text" name="menu_price" value="{{ $menu->menu_price }}"/>
            </div>
            
            <div class="sold_out">
                <h2>Sold out</h2>
                <select name="sold_out">
                    @if ($menu->sold_out == "販売中")
                        <option selected>販売中</option>
                        <option>売り切れ</option>
                    @else
                        <option>販売中</option>
                        <option selected>売り切れ</option>
                    @endif
                </select>
            </div>
            
            <input type="submit" value="store"/>
        </form>
        
        <div class="footer">
            <a href="/cafeterias/{{ $cafeteria->cafeteria_id }}">戻る</a>
        </div>
        
    </body>
</html>