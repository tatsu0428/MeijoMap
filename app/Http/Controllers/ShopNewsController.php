<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ShopNews;
use Illuminate\Http\Request;

use Cloudinary;

class ShopNewsController extends Controller
{
    public function show(ShopNews $shop_news)
    {
        return view('shop_news/show')->with(['shop_news' => $shop_news]);
    }
    
    public function create(Shop $shop)
    {
        return view('shop_news/create')->with(['shop' => $shop]);
    }
    
    public function store(Request $request, Shop $shop, ShopNews $shop_news)
    {
        $image = $request->file('image');
        
        $image_path = '';
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $shop_news = ShopNews::create([
            'shop_id' => $shop->shop_id,
            'news_title' => $request->news_title,
            'img_path' => $image_path,
            'news_content' => $request->news_content,
        ]);
        
        return redirect('/shops/' . $shop->shop_id);
    }
    
    public function edit(ShopNews $shop_news)
    {
        return view('shop_news/edit')->with(['shop_news' => $shop_news]);
    }
    
    public function update(Request $request, ShopNews $shop_news)
    {
        $image = $request->file('image');
        
        $image_path = $shop_news->img_path;
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $shop_news->update([
            'news_title' => $request->news_title,
            'news_content' => $request->news_content,
            'img_path' => $image_path,
        ]);

        return redirect('/shop_news/' . $shop_news->news_id);
    }
    
    public function delete(ShopNews $shop_news)
    {
        $shop_news->delete();
        
        return redirect('/shops/' . $shop_news->shop_id);
    }
}
