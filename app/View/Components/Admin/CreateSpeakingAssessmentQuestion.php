<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class CreateSpeakingAssessmentQuestion extends Component
{
    private $quiz;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quiz)
    {
        $this->quiz = $quiz;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.create-speaking-assessment-question',[
            'quiz' => $this->quiz
        ]);
    }
}
