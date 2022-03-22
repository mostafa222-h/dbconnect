
@extends('layouts.app')
@section('content')
    <div>
    @foreach($videos as $video)

            <a href="{{ route('videos.show', $video->slug) }}">{{$video->name}}</a>
        <a href="{{route('videos.edit',$video->slug)}}"><b style="color: rebeccapurple">edit</b>  </a>
       <a href="{{ route('videos.show', $video->slug) }}"> <img src="{{$video->thumbnail}}">  </a>

        {{$video->lengthInHuman}}.<b>زمان دقیق ویدیو</b> <hr><br>
        <b>تاریخ ساخت :::::</b>
        {{$video->created_at}}





    @endforeach
    </div>
    <br><hr><br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr><br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr>
    <div>
        @foreach($mostPopularVideos as $mostPopularVideo)

            <a href="{{ route('videos.show', $video->slug) }}"> {{$mostPopularVideo->name}} </a>
            <a href="{{route('videos.edit',$video->slug)}}"><b style="color: rebeccapurple">edit</b>  </a>
            <a href="{{ route('videos.show', $video->slug) }}"> <img src="{{$mostPopularVideo->thumbnail}}">  </a>




        @endforeach
    </div>
    <br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr><br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr>
    <div>
        @foreach($mostViewedVideos as $mostViewedVideo)

            <a href="{{ route('videos.show', $video->slug) }}"> {{$mostViewedVideo->name}} </a>
            <a href="{{route('videos.edit',$video->slug)}}"><b style="color: rebeccapurple">edit</b>  </a>
            <a href="{{ route('videos.show', $video->slug) }}"> <img src="{{$mostViewedVideo->thumbnail}}">  </a>




        @endforeach
    </div>
<br><br><br><br>
@endsection
