<?php

namespace App\Http\Livewire\Examination;

use Livewire\Component;
use App\Models\Examination;
use App\Models\Course;
use App\Models\Quiz;

class Create extends Component
{

    public $examination;
    public $course;


    protected $rules = [
        'examination.index' => 'required',
        'examination.type' => 'required',
    ];

    public function mount($course)
    {
        $this->course = Course::find($course);
    }

    public function save()
    {
        $this->validate();
        $_newExamination = Examination::create([
            'course_id' => $this->course->id,
            "name" => $this->examination['name'],
            "index" => $this->examination['index'],
            "type" =>  $this->examination['type']
        ]);
        for ($i=0; $i < 4; $i++) { 
            Quiz::create([
                'exam_id' => $_newExamination->id,
                'set' => $i
            ]);
        }
        return redirect()
            ->route('admin.course.examination.edit', ['course' => $this->course->id, 'exam' => $_newExamination->id])
            ->with('success', 'Create examination success');
    }

    public function render(){
        return view('livewire.examination.create')->layout('admin\layout');
    }
}
