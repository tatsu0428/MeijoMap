<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\FacilityNews;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function show(Facility $facility, FacilityNews $facility_news)
    {
        return view('facilities/show')->with(['facility' => $facility,
        'facility_news' => $facility_news->where('facility_id', $facility->facility_id )->get()
        ]);
    }
}
