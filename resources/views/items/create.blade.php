<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Register Item</title>
    </head>
    <body>
        <h1>Register Item</h1>
        <form action="/shops/{{ $shop->shop_id }}/item" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="name">
                <h2>Item Name</h2>
                <input type="text" name="item_name" placeholder="商品名"/>
            </div>
            
            <div class="image">
                <h2>Image</h2>
                <input type="file" name="image">
            </div>
            
            <div class="price">
                <h2>Item Price</h2>
                <input type="text" name="item_price" placeholder="値段"/>
            </div>
            
            <div class="sold_out">
                <h2>Sold out</h2>
                <select name="sold_out">
                    <option>販売中</option>
                    <option>売り切れ</option>
                </select>
            </div>
            
            <input type="submit" value="store"/>
        </form>
        
        <div class="footer">
            <a href="/shops/{{ $shop->shop_id }}">戻る</a>
        </div>
        
    </body>
</html>