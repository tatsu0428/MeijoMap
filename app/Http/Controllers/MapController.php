<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(Map $map)
    {
        return view('maps/index')->with(['maps' => $map->get()]);  
    }
}
