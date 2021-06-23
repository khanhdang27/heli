<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class ProductTab extends Component
{
    public $courses;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($courses)
    {
        $this->courses=$courses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.product-tab',[
            'courses'=>$this->courses
        ]);
    }
}
