<?php

namespace App\View\Components\Forum;

use Illuminate\View\Component;

class CommentItem extends Component
{
    public $refComment;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($refComment)
    {
        $this->refComment=$refComment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.forum.comment-item',[
            'refComment' =>$this->refComment
        ]);
    }
}
