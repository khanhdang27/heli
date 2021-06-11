<?php

namespace App\View\Components\Blog;

use Illuminate\View\Component;

class BlogTopWeek extends Component
{
    public $blogs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blogs)
    {
        $this->blogs=$blogs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.blog.blog-top-week',[
            'blog_top'=>$this->blogs
        ]);
    }
}
