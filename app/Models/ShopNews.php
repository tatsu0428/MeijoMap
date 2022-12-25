<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopNews extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $primaryKey = 'news_id'; // 主キー名の変更
    
    protected $fillable = [
        'shop_id',
        'news_title',
        'news_content',
        'img_path',
    ];
}
