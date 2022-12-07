<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Shop;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(Map $map)
    {
        return view('maps/index')->with(['maps' => $map->get()]);  
    }
    
    public function show(Map $map, Shop $shop)
    {
        return view('maps/show')->with(['map' => $map, 'shops' => $shop->where('map_id', $map->map_id )->get()]);
    }
}
