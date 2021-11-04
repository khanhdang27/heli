<?php

namespace App\View\Components\Admin;

use App\Models\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ListWritingQuizQuestion extends Component
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
        // DB::enableQueryLog();
        $this->question = Question::where('quiz_id', $this->quiz->id)
            ->where('type', Question::WRITING)->get();
        return view('components.admin.list-writing-quiz-question',['quiz' => $this->quiz, 'questions' => $this->question]);
    }
}
