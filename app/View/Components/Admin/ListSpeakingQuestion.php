<?php

namespace App\View\Components\Admin;

use App\Models\Question;
use Illuminate\View\Component;

class ListSpeakingQuestion extends Component
{
    private $quiz;
    private $questions;
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
        $this->questions = Question::where('quiz_id', $this->quiz->id)
            ->where('type', \Constants::COURSE_SPEAKING)
            ->get();
        return view('components.admin.list-speaking-question', ['quiz' => $this->quiz, 'questions' => $this->questions]);
    }
}
