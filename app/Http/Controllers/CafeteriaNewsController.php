<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Models\CafeteriaNews;
use Illuminate\Http\Request;

use Cloudinary;

class CafeteriaNewsController extends Controller
{
    public function show(CafeteriaNews $cafeteria_news)
    {
        return view('cafeteria_news/show')->with(['cafeteria_news' => $cafeteria_news]);
    }
    
    public function create(Cafeteria $cafeteria)
    {
        return view('cafeteria_news/create')->with(['cafeteria' => $cafeteria]);
    }
    
    public function store(Request $request, Cafeteria $cafeteria, CafeteriaNews $cafeteria_news)
    {
        $image = $request->file('image');
        
        $image_path = '';
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $cafeteria_news = CafeteriaNews::create([
            'cafeteria_id' => $cafeteria->cafeteria_id,
            'news_title' => $request->news_title,
            'img_path' => $image_path,
            'news_content' => $request->news_content,
        ]);
        
        return redirect('/cafeterias/' . $cafeteria->cafeteria_id);
    }
    
    public function edit(CafeteriaNews $cafeteria_news)
    {
        return view('cafeteria_news/edit')->with(['cafeteria_news' => $cafeteria_news]);
    }
    
    public function update(Request $request, CafeteriaNews $cafeteria_news)
    {
        $image = $request->file('image');
        
        $image_path = $cafeteria_news->img_path;
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $cafeteria_news->update([
            'news_title' => $request->news_title,
            'news_content' => $request->news_content,
            'img_path' => $image_path,
        ]);

        return redirect('/cafeteria_news/' . $cafeteria_news->news_id);
    }
    
    public function delete(CafeteriaNews $cafeteria_news)
    {
        $cafeteria_news->delete();
        
        return redirect('/cafeterias/' . $cafeteria_news->cafeteria_id);
    }
}
