
@extends('layouts.app')
@section('content')
    <div>
    @foreach($videos as $video)

        {{$video->name}}
       <a> <img src="{{$video->thumbnail}}">  </a>




    @endforeach
    </div>
@endsection
