<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoCourse extends Component
{
    public $courseDetail;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courseDetail)
    {
        $this->courseDetail=$courseDetail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.video-course',[
            'courseDetail' => $this->courseDetail
        ]);
    }
}
