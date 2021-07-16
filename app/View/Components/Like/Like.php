<?php

namespace App\View\Components\Like;

use Illuminate\View\Component;

class Like extends Component
{
    public $likeRef;
    public $likeModule;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($likeModule,$likeRef)
    {
        $this->likeRef=$likeRef;
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
            'likeRef' => $this->likeRef,
            'likeModule' => $this->likeModule
        ]);
    }
}
