<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Banner extends Component
{
    public $banner;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($banner)
    {
        $this->banner = $banner;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.home.banner', [
            'banner' => $this->banner
        ]);
    }
}
