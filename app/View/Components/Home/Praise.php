<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Praise extends Component
{
    public $content;
    public $name;
    public $school;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $content, $name, $school)
    {
        $this->content = $content;
        $this->name = $name;
        $this->school = $school;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.praise',[
            'content' => $this->content,
            'name' => $this->name,
            'school' => $this->school
        ]);
    }
}
