<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TweetResource;
use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweet::with('location', 'tweet_confident', 'user', 'likes')->latest()->get();
        return TweetResource::collection($tweets);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = '';
        if ($request->file('image')) {
            $filename = 'img_tweet_' . time() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->storeAs(
                'tweetImage',
                $filename,
                'public'
            );
        }
        $tweet = Tweet::create([
            'description' => $request->description,
            'image_url' => 'storage/' . $path,
            'user_id' => $request->user_id,
            'location_id' => $request->location_id,
            'tweet_confident_id' => $request->tweet_confident_id
        ]);
        return new TweetResource($tweet);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function show(Tweet $tweet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function edit(Tweet $tweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tweet $tweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tweet $tweet)
    {
        //
    }

    public function isLikedByUserLoggedIn($user_id, $tweet_id)
    {
        $isLikedByUserLoggedIn = Like::where('user_id', $user_id)
                                    ->where('tweet_id', $tweet_id)
                                    ->first();
        return response()->json(['isLikedByUserLoggedIn' => $isLikedByUserLoggedIn ? true : false]);
    }
}
