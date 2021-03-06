<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        //$videos=Video::latest()->take(6)->get();
        $mostPopularVideos = Video::all()->random(6);
        $mostViewedVideos = Video::all();
        return view('index',compact('mostPopularVideos','mostViewedVideos'));

        /*return view('index',[
            'videos'=>$videos ,
            'mostPopularVideos' => $mostPopularVideos ,
            'mostViewedVideos' => $mostViewedVideos
        ]);*/
    }
}
