<?php

namespace App\View\Components;

use App\Models\Video;
use Illuminate\View\Component;

class RelatedVideo extends Component
{
    public $videos;

    /**
     * Create a new component instance.
     *
     * @param Video $video
     */
    public function __construct(Video $video)
    {
        $this->videos = $video->relatedVideos(2);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.related-video');
    }
}
