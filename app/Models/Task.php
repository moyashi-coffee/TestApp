<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%83%A2%E3%83%87%E3%83%AB%E4%BD%9C%E6%88%90
    protected $fillable = [
        'title',
        'content',
        'member',
    
    ];
    
}
