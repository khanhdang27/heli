<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class CourseComment extends Component
{
    public $comment;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.course-comment', [
            'comment' => $this->comment
        ]);
    }
}
