<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        //$video = Video::all();
        $latest=Video::lastest()->take(6)->get();
        $mostPopular = Video::all()->random(6)->get();
        $mostView = Video::all();
        return view('index',[
            'latest'=>$latest ,
            'mostPopular' => $mostPopular ,
            ' mostView' => $mostView
            ]);
    }
}
