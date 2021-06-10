<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class BlogListWeek extends Component
{
    public $blog;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blog)
    {
        $this->blog=$blog;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.blog-list-week',[
            'item'=>$this->blog
        ]);
    }
}
