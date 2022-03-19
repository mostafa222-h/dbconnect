<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class VideoController extends Controller
{
     public function index()
     {
          return  $video = Video::find(1);
     }
     public  function  create(){
        return view('videos.create');
     }

     public function store(Request $request){
         //dd($request->all());

         $request->validate([
             'name'=> ['required'] ,
             'director' => ['required'] ,
             'slug' => ['required','unique:videos,slug'] ,
             'url' => ['required' , 'url'] ,
             'length' => ['required','integer'] ,
             'thumbnail' => ['required' , 'url'] ,
         ]);
         Video::create($request->all());
         return redirect('index')->with('alert',__('message.success'));
     }
}
