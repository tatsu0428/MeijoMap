<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $primaryKey = 'facility_id'; // 主キー名の変更
    
    protected $fillable = [
        'facility_name',
        'floor',
        'img_path',
        'introduction',
        'business_hours',
        'map_id'
    ];
}
