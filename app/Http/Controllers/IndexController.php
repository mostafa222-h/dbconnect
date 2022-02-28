<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $video = Video::all();
        return view('index',['videos'=>$video]);
    }
}
