<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
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

     public function store(StoreVideoRequest $request){
         //dd($request->all());

        /* $request->validate([
             'name'=> ['required'] ,
             'director' => ['required'] ,
             'slug' => ['required','unique:videos,slug'] ,
             'url' => ['required' , 'url'] ,
             'length' => ['required','integer'] ,
             'thumbnail' => ['required' , 'url'] ,
         ]);*/
         Video::create($request->all());
         return redirect('index')->with('alert',__('message.success'));
     }


     public function show(Request $request ,Video $video){

         return view('videos.show',compact('video'));
     }
     public function edit(Video $video){
         return view('videos.edit',compact('video'));
     }
     public function update(UpdateVideoRequest $request ,Video $video){
         $video->update($request->all());
         return redirect()->route('videos.show' , $video->slug)->with('alert',__('message.video_edited'));
     }
}
