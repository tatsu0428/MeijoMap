<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\FacilityNews;
use App\Models\Map;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index(Facility $facility)
    {
        return view('facilities/index')->with(['facilities' => $facility->get()]);
    }
    
    public function show(Facility $facility, FacilityNews $facility_news)
    {
        return view('facilities/show')->with(['facility' => $facility,
        'facility_news' => $facility_news->where('facility_id', $facility->facility_id )->get()
        ]);
    }
    
    public function create(Map $map)
    {
        return view('facilities/create')->with(['maps' => $map->get()]);
    }
    
    public function store(Request $request, Facility $facility)
    {
        // ディレクトリ名
        $dir = 'facility_img';
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);
        // ファイル情報をDBに保存
        $image_path = 'storage/' . $dir . '/' . $file_name;
        
        // 営業時間を整形して取得
        $business_hours = $request->opening_time . '〜' . $request->closing_time;
        
        $facility = Facility::create([
            'facility_name' => $request->facility_name,
            'floor' => $request->facility_floor,
            'img_path' => $image_path,
            'introduction' => $request->introduction,
            'business_hours' => $business_hours,
            'map_id' => $request->map_id,
        ]);
        
        return redirect('/facilities/');
    }
    
    public function edit(Facility $facility, Map $map)
    {
        return view('facilities/edit')->with(['facility' => $facility, 'maps' => $map->get()]);
    }
    
    public function update(Request $request, Facility $facility)
    {
        // ディレクトリ名
        $dir = 'facility_img';
        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);
        // ファイル情報をDBに保存
        $image_path = 'storage/' . $dir . '/' . $file_name;
        
        // 営業時間を整形して取得
        $business_hours = $request->opening_time . '〜' . $request->closing_time;
        
        $facility->update([
            'facility_name' => $request->facility_name,
            'floor' => $request->facility_floor,
            'img_path' => $image_path,
            'introduction' => $request->introduction,
            'business_hours' => $business_hours,
            'map_id' => $request->map_id,
        ]);

        return redirect('/facilities/' . $facility->facility_id);
    }

}
