<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class CourseListHot extends Component
{
    public $courses;
    public $typeOfUI;
    public $tab;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courses, $typeOfUI, $tab)
    {
        $this->courses = $courses;
        $this->typeOfUI = $typeOfUI;
        $this->tab = $tab;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view(
            'components.product.course-list-hot',
            [
                'courses' => $this->courses,
                'typeOfUI' => $this->typeOfUI,
                'tab' => $this->tab,
            ]
        );
    }
}
