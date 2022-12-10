<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Models\Menu;
use App\Models\CafeteriaNews;
use Illuminate\Http\Request;

class CafeteriaController extends Controller
{
    public function show(Cafeteria $cafeteria, Menu $menu, CafeteriaNews $cafeteria_news)
    {
        return view('cafeterias/show')->with(['cafeteria' => $cafeteria,
        'menus' => $menu->where('cafeteria_id', $cafeteria->cafeteria_id )->get(), 
        'cafeteria_news' => $cafeteria_news->where('cafeteria_id', $cafeteria->cafeteria_id )->get()
        ]);
    }
}
