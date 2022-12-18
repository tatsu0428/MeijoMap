<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Models\Menu;
use App\Models\CafeteriaNews;
use App\Models\Map;
use Illuminate\Http\Request;

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
        // ディレクトリ名
        $dir = 'cafeteria_img';
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);
        // ファイル情報をDBに保存
        $image_path = 'storage/' . $dir . '/' . $file_name;
        
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
}
