<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class ForumComment extends Component
{
    public $comment;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forum.forum-comment',[
            'comment' => $this->comment
        ]);
    }
}
