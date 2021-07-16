<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class ForumPost extends Component
{
    public $post;
    public $tags;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $tags)
    {
        $this->post = $post;
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forum.forum-post',[
            'post' => $this->post,
            'tags' => $this->tags
        ]);
    }
}
