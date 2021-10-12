<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class CourseRate extends Component
{
    public $courseDetail;
    public $studentCourse;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courseDetail, $studentCourse)
    {
        $this->courseDetail=$courseDetail;
        $this->studentCourse=$studentCourse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.course-rate',[
            'courseDetail' => $this->courseDetail,
            'studentCourse' => $this->studentCourse
        ]);
    }
}
