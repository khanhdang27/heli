<?php

namespace App\View\Components\Like;

use Illuminate\View\Component;

class Like extends Component
{
    public $userLike;
    public $post;
    public $likeModule;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userLike, $post, $likeModule)
    {
        $this->userLike=$userLike;
        $this->post=$post;
        $this->likeModule=$likeModule;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.like.like',[
            'userLike' => $this->userLike,
            'post' => $this->post,
            'likeModule' => $this->likeModule
        ]);
    }
}
