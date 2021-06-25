<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class CourseList extends Component
{
    public $courses;
    public $typeOfUI;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courses, $typeOfUI)
    {
        $this->courses=$courses;
        $this->typeOfUI=$typeOfUI;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product.course-list',[
            'courses'=>$this->courses,
            'typeOfUI' => $this->typeOfUI
        ]);
    }
}
