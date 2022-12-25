<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $primaryKey = 'menu_id'; // 主キー名の変更
    
    protected $fillable = [
        'cafeteria_id',
        'menu_name',
        'img_path',
        'menu_price',
        'sold_out',
    ];
}
