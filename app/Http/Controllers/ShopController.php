<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Item;
use App\Models\ShopNews;
use App\Models\Map;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Shop $shop)
    {
        return view('shops/index')->with(['shops' => $shop->get()]);
    }
    
    public function show(Shop $shop, Item $item, ShopNews $shop_news)
    {
        return view('shops/show')->with(['shop' => $shop,
        'items' => $item->where('shop_id', $shop->shop_id )->get(), 
        'shop_news' => $shop_news->where('shop_id', $shop->shop_id )->get()
        ]);
    }
    
    public function create(Map $map)
    {
        return view('shops/create')->with(['maps' => $map->get()]);
    }
    
    public function store(Request $request, Shop $shop)
    {
        $image = $request->file('image');
        
        $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        
        // 営業時間を整形して取得
        $business_hours = $request->opening_time . '〜' . $request->closing_time;
        
        $shop = Shop::create([
            'shop_name' => $request->shop_name,
            'floor' => $request->shop_floor,
            'img_path' => $image_path,
            'introduction' => $request->introduction,
            'business_hours' => $business_hours,
            'map_id' => $request->map_id,
        ]);
        
        
        return redirect('/shops/');
    }
    
    public function edit(Shop $shop, Map $map)
    {
        return view('shops/edit')->with(['shop' => $shop, 'maps' => $map->get()]);
    }
    
    public function update(Request $request, Shop $shop)
    {
        $image = $request->file('image');
        
        $image_path = $shop->img_path;
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        // 営業時間を整形して取得
        $business_hours = $request->opening_time . '〜' . $request->closing_time;
        
        $shop->update([
            'shop_name' => $request->shop_name,
            'floor' => $request->shop_floor,
            'img_path' => $image_path,
            'introduction' => $request->introduction,
            'business_hours' => $business_hours,
            'map_id' => $request->map_id,
        ]);

        return redirect('/shops/' . $shop->shop_id);
    }
    
    public function delete(Shop $shop)
    {
        $shop->delete();
        
        return redirect('/shops/');
    }
}
