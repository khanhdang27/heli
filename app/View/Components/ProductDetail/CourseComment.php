<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class CourseComment extends Component
{
    public $comment;
    public $course;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $comment, $course)
    {
        $this->comment = $comment;
        $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.course-comment', [
            'comment' => $this->comment,
            'course' => $this->course
        ]);
    }
}
