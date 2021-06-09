<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class CourseList extends Component
{
    public $courseItem;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courseItem)
    {
        $this->courseItem=$courseItem;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product.course-list',[
            'courseItem'=>$this->courseItem
        ]);
    }
}
