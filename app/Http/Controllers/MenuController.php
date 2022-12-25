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
    
    public function edit(Cafeteria $cafeteria, Menu $menu)
    {
        return view('menus/edit')->with(['cafeteria' => $cafeteria, 'menu' => $menu]);
    }
    
    public function update(Request $request, Cafeteria $cafeteria, Menu $menu)
    {
        $image = $request->file('image');
        
        $image_path = $menu->img_path;
        
        if (isset($image)) {
            $image_path = Cloudinary::upload($image->getRealPath())->getSecurePath();
        }
        
        $menu->update([
            'menu_name' => $request->menu_name,
            'img_path' => $image_path,
            'menu_price' => $request->menu_price,
            'sold_out' => $request->sold_out,
        ]);

        return redirect('/cafeterias/' . $cafeteria->cafeteria_id);
    }
    
    public function delete(Menu $menu)
    {
        $menu->delete();
        
        return redirect('/cafeterias/' . $menu->cafeteria_id);
    }
    
}
