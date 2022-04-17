@extends('layouts.app')
@section('content')

    <h1 class="new-video-title" style="text-align: right"><i class="fa fa-bolt"></i> {{$title}}</h1>
    <div class="row">
        @foreach ($videos as $video)
            <x-video-box :video="$video"></x-video-box>
        @endforeach

    </div>

@endsection
