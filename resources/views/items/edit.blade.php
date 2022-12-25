<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit Item</title>
    </head>
    <body>
        <h1>Edit Item</h1>
        <form action="/items/{{ $item->item_id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="name">
                <h2>Item Name</h2>
                <input type="text" name="item_name" value="{{ $item->item_name}}"/>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <p>{{ $item->img_path }}</p>
                <input type="file" name="image">
            </div>
            
            <div class="price">
                <h2>Item Price</h2>
                <input type="text" name="item_price" value="{{ $item->item_price }}"/>
            </div>
            
            <div class="sold_out">
                <h2>Sold out</h2>
                <select name="sold_out">
                    @if ($item->sold_out == "販売中")
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
            <a href="/shops/{{ $shop->shop_id }}">戻る</a>
        </div>
        
    </body>
</html>