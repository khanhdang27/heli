<?php

namespace App\View\Components\Admin;

use App\Models\Question;
use Illuminate\View\Component;

class ListSpeakingAssessmentQuestion extends Component
{
    private $quiz;
    private $question;
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
        $this->question = Question::where('quiz_id', $this->quiz->id)
        ->where('type', Question::SPEAKING)->get();
        return view('components.admin.list-speaking-assessment-question',[
            'quiz' => $this->quiz,
            'questions' => $this->question,
        ]);
    }
}
