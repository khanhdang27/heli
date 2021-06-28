<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Categories extends Component
{
    public $subjects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subjects)
    {
        $this->subjects = $subjects;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.categories', [
            'subjects' => $this->subjects
        ]);
    }
}
