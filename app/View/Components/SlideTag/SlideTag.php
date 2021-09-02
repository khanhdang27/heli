<?php

namespace App\View\Components\SlideTag;

use Illuminate\View\Component;

class SlideTag extends Component
{
    public $tags;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tags, $type)
    {
        $this->tags = $tags;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.slide-tag.slide-tag',[
            'tags' => $this->tags,
            'type' => $this->type
        ]);
    }
}
