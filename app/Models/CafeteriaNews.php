<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeteriaNews extends Model
{
    use HasFactory;
    protected $primaryKey = 'news_id'; // 主キー名の変更
}
