<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;
use App\Models\Passage;

class CreateReadQuestion extends Component
{
    private $quiz;
    private $passage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quiz)
    {
        $this->quiz = $quiz;
        $this->passage = Passage::where('quiz_id', $this->quiz->id)->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.create-read-question', ['quiz' => $this->quiz, 'passage'=> $this->passage]);
    }
}
