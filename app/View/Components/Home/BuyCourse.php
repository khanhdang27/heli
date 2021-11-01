<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class BuyCourse extends Component
{
    public $course;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($course)
    {
        $this->course = $course;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.buy-course', [
            'course' => $this->course,
        ]);
    }
}
