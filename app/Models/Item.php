<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $primaryKey = 'item_id'; // 主キー名の変更
    
    protected $fillable = [
        'shop_id',
        'item_name',
        'img_path',
        'item_price',
        'sold_out',
    ];
}
