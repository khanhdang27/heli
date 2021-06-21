<?php

namespace App\View\Components\Comment;

use Illuminate\View\Component;

class Comment extends Component
{
    public $refComment;
    public $commentModule;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($refComment, $commentModule)
    {
        $this->refComment=$refComment;
        $this->commentModule=$commentModule;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.comment.comment',[
            'refComment' =>$this->refComment,
            'commentModule' =>$this->commentModule
        ]);
    }
}
