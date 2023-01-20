<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'decription',
        'image_url',
        'user_id',
        'tweet_reply_id',
        'location_id',
        'tweet_confident_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function tweet_confident()
    {
        return $this->belongsTo(Tweet_confident::class);
    }

    public function replies()
    {
        return $this->belongsToMany(Tweet_reply::class);
    }
}