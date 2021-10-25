<?php

namespace App\Http\Livewire\Examination;

use App\Models\Course;
use App\Models\Examination;
use App\Models\Quiz;
use Livewire\Component;

class Edit extends Component
{

    public $exam;
    public $course;
    public $quizzes;

    public $name;
    public $index;
    public $type;

    public function mount($course, $exam)
    {
        $this->course = Course::find($course);
        $this->exam = Examination::find($exam);
        $this->quizzes = Quiz::where('exam_id', $exam)->get()->toArray();

        $this->name = $this->exam->name;
        $this->index = $this->exam->index;
        $this->type = $this->exam->type;
    }

    public function updateExamination()
    {
        $this->exam->name = $this->name;
        $this->exam->index = $this->index;
        $this->exam->type = $this->type;

        $this->exam->save();

        return redirect()->back()->with('success', 'Update examination success');
    }

    public function render()
    {
        return view('livewire.examination.edit')->layout('admin\layout');
    }
}
