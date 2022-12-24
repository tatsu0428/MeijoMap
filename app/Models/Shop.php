<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;
    
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
