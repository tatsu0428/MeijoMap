<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Facility;
use App\Models\Cafeteria;
use App\Models\Shop;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(Map $map)
    {
        return view('maps/index')->with(['maps' => $map->get()]);  
    }
    
    public function show(Map $map, Facility $facility, Cafeteria $cafeteria, Shop $shop)
    {
        return view('maps/show')->with(['map' => $map,
        'facilities' => $facility->where('map_id', $map->map_id )->get(), 
        'cafeterias' => $cafeteria->where('map_id', $map->map_id )->get(),
        'shops' => $shop->where('map_id', $map->map_id )->get()]);
    }
}
