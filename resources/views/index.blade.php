
@extends('layouts.app')
@section('content')
    <div>
    @foreach($videos as $video)

        {{$video->name}}
       <a> <img src="{{$video->thumbnail}}">  </a>




    @endforeach
    </div>
    <br><hr><br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr><br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr>
    <div>
        @foreach($mostPopularVideos as $mostPopularVideo)

            {{$mostPopularVideo->name}}
            <a> <img src="{{$mostPopularVideo->thumbnail}}">  </a>




        @endforeach
    </div>
    <br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr><br><hr><br><br><br><br><hr><hr><hr><hr><hr><hr><hr><hr><hr>
    <div>
        @foreach($mostViewedVideos as $mostViewedVideo)

            {{$mostViewedVideo->name}}
            <a> <img src="{{$mostViewedVideo->thumbnail}}">  </a>




        @endforeach
    </div>
<br><br><br><br>
@endsection
