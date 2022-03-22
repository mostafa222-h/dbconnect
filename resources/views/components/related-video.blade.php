<div>
    @foreach ($videos as $video)
        <div >
            <div >
                <small>{{ $video->lengthInHuman }}</small>
                <a href="{{ route('videos.show', $video->slug) }}"><img src="{{ $video->thumbnail }}" alt=""></a>
            </div>
            <a href="{{ route('videos.show', $video->slug) }}">{{ $video->name }}</a>
            <a href="#">داود طاهری<span>
                    <i ></i></span></a>
        </div>
    @endforeach
</div>
