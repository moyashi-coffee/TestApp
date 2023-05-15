<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAgent extends Model
{
    use HasFactory;

    /**
     * User Agentを保存する文字列の配列
     * 
     */
    protected $user_agent = [
        'product',
        'version',
        'comment',
    ];
}
