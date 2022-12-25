<?php

namespace App\Http\Controllers;

use App\Models\CafeteriaNews;
use Illuminate\Http\Request;

class CafeteriaNewsController extends Controller
{
    public function show(CafeteriaNews $cafeteria_news)
    {
        return view('cafeteria_news/show')->with(['cafeteria_news' => $cafeteria_news]);
    }
    
    public function delete(CafeteriaNews $cafeteria_news)
    {
        $cafeteria_news->delete();
        
        return redirect('/cafeterias/' . $cafeteria_news->cafeteria_id);
    }
}
