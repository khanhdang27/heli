<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class CourseSubmit extends Component
{
    public $courseDetail;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courseDetail)
    {
        $this->courseDetail = $courseDetail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.course-submit',[
            'courseDetail' => $this->courseDetail
        ]);
    }
}
