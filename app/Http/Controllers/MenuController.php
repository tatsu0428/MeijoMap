<?php

namespace App\Http\Controllers;

use App\Models\Cafeteria;
use App\Models\Menu;
use Illuminate\Http\Request;

use Cloudinary;

class MenuController extends Controller
{
    public function create(Cafeteria $cafeteria)
    {
        return view('menus/create')->with(['cafeteria' => $cafeteria]);
    }
    
    public function store(Request $request, Cafeteria $cafeteria, Menu $menu)
    {
        $image = $request->file('image');
        
        $image_path = '';
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $menu = Menu::create([
            'cafeteria_id' => $cafeteria->cafeteria_id,
            'menu_name' => $request->menu_name,
            'img_path' => $image_path,
            'menu_price' => $request->menu_price,
            'sold_out' => $request->sold_out,
        ]);
        
        return redirect('/cafeterias/' . $cafeteria->cafeteria_id);
    }
}
