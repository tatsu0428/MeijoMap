<?php

namespace App\Http\Controllers;

use App\Models\ShopNews;
use Illuminate\Http\Request;

class ShopNewsController extends Controller
{
    public function show(ShopNews $shop_news)
    {
        return view('shop_news/show')->with(['shop_news' => $shop_news]);
    }
}
