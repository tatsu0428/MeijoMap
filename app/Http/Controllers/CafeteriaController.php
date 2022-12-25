<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Models\Menu;
use App\Models\CafeteriaNews;
use App\Models\Map;
use Illuminate\Http\Request;

use Cloudinary;

class CafeteriaController extends Controller
{
    public function index(Cafeteria $cafeteria)
    {
        return view('cafeterias/index')->with(['cafeterias' => $cafeteria->get()]);
    }
    
    public function show(Cafeteria $cafeteria, Menu $menu, CafeteriaNews $cafeteria_news)
    {
        return view('cafeterias/show')->with(['cafeteria' => $cafeteria,
        'menus' => $menu->where('cafeteria_id', $cafeteria->cafeteria_id )->get(), 
        'cafeteria_news' => $cafeteria_news->where('cafeteria_id', $cafeteria->cafeteria_id )->get()
        ]);
    }
    
    public function create(Map $map)
    {
        return view('cafeterias/create')->with(['maps' => $map->get()]);
    }
    
    public function store(Request $request, Cafeteria $cafeteria)
    {
        $image = $request->file('image');
        
        $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        
        // 営業時間を整形して取得
        $business_hours = $request->opening_time . '〜' . $request->closing_time;
        
        $cafeteria = Cafeteria::create([
            'cafeteria_name' => $request->cafeteria_name,
            'floor' => $request->cafeteria_floor,
            'img_path' => $image_path,
            'introduction' => $request->introduction,
            'congestion_situation' => $request->congestion_situation,
            'business_hours' => $business_hours,
            'map_id' => $request->map_id,
        ]);
        
        return redirect('/cafeterias/');
    }
    
    public function edit(Cafeteria $cafeteria, Map $map)
    {
        return view('cafeterias/edit')->with(['cafeteria' => $cafeteria, 'maps' => $map->get()]);
    }
    
    public function update(Request $request, Cafeteria $cafeteria)
    {
        $image = $request->file('image');
        
        $image_path = $cafeteria->img_path;
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        // 営業時間を整形して取得
        $business_hours = $request->opening_time . '〜' . $request->closing_time;
        
        $cafeteria->update([
            'cafeteria_img_name' => $request->cafeteria_img_name,
            'floor' => $request->cafeteria_floor,
            'img_path' => $image_path,
            'introduction' => $request->introduction,
            'business_hours' => $business_hours,
            'map_id' => $request->map_id,
        ]);

        return redirect('/cafeterias/' . $cafeteria->cafeteria_id);
    }
    
    public function update_congestion_situation(Request $request, Cafeteria $cafeteria)
    {
        $cafeteria->update(['congestion_situation' => $request->congestion_situation]);
        
        return redirect('/cafeterias/');
    }
    
    public function delete(Cafeteria $cafeteria)
    {
        $cafeteria->delete();
        
        return redirect('/cafeterias/');
    }
}
