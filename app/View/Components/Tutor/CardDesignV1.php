<?php

namespace App\View\Components\Tutor;

use Illuminate\View\Component;

class CardDesignV1 extends Component
{
    public $tutor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tutor)
    {
        $this->tutor = $tutor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tutor.card-design-v1', [
            'tutor' => $this->tutor
        ]);
    }
}
