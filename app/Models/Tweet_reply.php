<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet_reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'tweet_id'
    ];

}
