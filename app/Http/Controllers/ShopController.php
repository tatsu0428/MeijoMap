<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Item;
use App\Models\ShopNews;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show(Shop $shop, Item $item, ShopNews $shop_news)
    {
        return view('shops/show')->with(['shop' => $shop,
        'items' => $item->where('shop_id', $shop->shop_id )->get(), 
        'shop_news' => $shop_news->where('shop_id', $shop->shop_id )->get()
        ]);
    }
}
