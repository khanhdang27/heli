<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class LectureCourse extends Component
{
    public $videoId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.lecture-course', [
            'videoId'=> $this->videoId
        ]);
    }
}
