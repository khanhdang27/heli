<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoCourse extends Component
{
    public $courseDetail;
    public $latesLecture;
    public $studentCourse;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courseDetail, $studentCourse, $latesLecture = null)
    {
        $this->courseDetail = $courseDetail;
        $this->latesLecture =  $latesLecture;
        $this->studentCourse = $studentCourse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.video-course', [
            'courseDetail' => $this->courseDetail,
            'latesLecture' => $this->latesLecture,
            'studentCourse' => $this->studentCourse
        ]);
    }
}
