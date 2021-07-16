<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class CourseItem extends Component
{
    public $course;
    public $typeOfUI;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($course, $typeOfUI)
    {
        $this->course = $course;
        $this->typeOfUI=$typeOfUI;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product.course-item', [
            'course' => $this->course,
            'typeOfUI' => $this->typeOfUI
        ]);
    }
}
