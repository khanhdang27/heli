<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class CourseCardPage extends Component
{
    public $course;
    public $studentCourse;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($course, $studentCourse)
    {
        $this->course = $course;
        $this->studentCourse = $studentCourse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.course-card-page', [
            'course'=> $this->course,
            'studentCourse' => $this->studentCourse
        ]);
    }
}
