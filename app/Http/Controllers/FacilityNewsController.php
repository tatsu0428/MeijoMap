<?php

namespace App\Http\Controllers;

use App\Models\FacilityNews;
use Illuminate\Http\Request;

class FacilityNewsController extends Controller
{
    public function show(FacilityNews $facility_news)
    {
        return view('facility_news/show')->with(['facility_news' => $facility_news]);
    }
    
    public function delete(FacilityNews $facility_news)
    {
        $facility_news->delete();
        
        return redirect('/facilities/' . $facility_news->facility_id);
    }
}
