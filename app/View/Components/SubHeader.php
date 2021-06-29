<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SubHeader extends Component
{
    public $subjects;
    public $page;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subjects, $page=null)
    {
        $this->subjects = $subjects;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sub-header', [
            'subjects'=> $this->subjects,
            'page' => $this->page
        ]);
    }
}
