<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cafeteria extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $primaryKey = 'cafeteria_id'; // 主キー名の変更
    
    protected $fillable = [
        'cafeteria_name',
        'floor',
        'img_path',
        'introduction',
        'congestion_situation',
        'business_hours',
        'map_id'
    ];
}
