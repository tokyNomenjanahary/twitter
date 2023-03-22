<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tweet_confident;
use Illuminate\Http\Request;

class TweetConfidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confidents = Tweet_confident::all();

        return response()->json($confidents);
    }

}
