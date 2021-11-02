<?php

namespace App\View\Components\Admin;

use App\Models\Passage;
use App\Models\Question;
use Illuminate\View\Component;

class ListReadingQuestion extends Component
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
        ->where('type', Question::READING)
        ->get();

        $passage = Passage::where('quiz_id', $this->quiz->id)->first();
        return view('components.admin.list-reading-question', [
            'questions' => $this->questions,
            'quiz' => $this->quiz,
            'passage' => $passage,
        ]);
    }
}
