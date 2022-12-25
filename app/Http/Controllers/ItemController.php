<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Item;
use Illuminate\Http\Request;

use Cloudinary;

class ItemController extends Controller
{
    public function create(Shop $shop)
    {
        return view('items/create')->with(['shop' => $shop]);
    }
    
    public function store(Request $request, Shop $shop, Item $item)
    {
        $image = $request->file('image');
        
        $image_path = '';
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $item = Item::create([
            'shop_id' => $shop->shop_id,
            'item_name' => $request->item_name,
            'img_path' => $image_path,
            'item_price' => $request->item_price,
            'sold_out' => $request->sold_out,
        ]);
        
        return redirect('/shops/' . $shop->shop_id);
    }
}
