<?php

namespace App\View\Components\ProductDetail;

use Illuminate\View\Component;

class OnlineClass extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.product-detail.online-class');
    }
}
