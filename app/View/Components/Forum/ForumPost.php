<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class ForumPost extends Component
{
    public $post;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forum.forum-post',[
            'post' => $this->post
        ]);
    }
}
