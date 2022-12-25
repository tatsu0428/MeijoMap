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
}
