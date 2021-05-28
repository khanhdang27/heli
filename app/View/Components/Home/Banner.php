<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Banner extends Component
{
    private $_static;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($static)
    {
        $this->_static = $static;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.banner', ['static' => $this->_static]);
    }
}
