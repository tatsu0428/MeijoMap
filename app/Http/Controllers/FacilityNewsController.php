<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\FacilityNews;
use Illuminate\Http\Request;

use Cloudinary;

class FacilityNewsController extends Controller
{
    public function show(FacilityNews $facility_news)
    {
        return view('facility_news/show')->with(['facility_news' => $facility_news]);
    }
    
    public function create(Facility $facility)
    {
        return view('facility_news/create')->with(['facility' => $facility]);
    }
    
    public function store(Request $request, Facility $facility, FacilityNews $facility_news)
    {
        $image = $request->file('image');
        
        $image_path = '';
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $facility_news = FacilityNews::create([
            'facility_id' => $facility->facility_id,
            'news_title' => $request->news_title,
            'img_path' => $image_path,
            'news_content' => $request->news_content,
        ]);
        
        return redirect('/facilities/' . $facility->facility_id);
    }
    
    public function delete(FacilityNews $facility_news)
    {
        $facility_news->delete();
        
        return redirect('/facilities/' . $facility_news->facility_id);
    }
}
