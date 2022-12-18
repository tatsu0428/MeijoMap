<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $primaryKey = 'shop_id'; // 主キー名の変更
    
    protected $fillable = [
        'shop_name',
        'floor',
        'img_path',
        'introduction',
        'business_hours',
        'map_id'
    ];
    
}
