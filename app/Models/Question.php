<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    protected $table = 'questions';

    public $timestamps = true;

    protected $guarded = [];

    // const READING = 1;
    // const WRITING = 2;
    // const LISTENING = 3;
    // const SPEAKING = 4;

    // const TYPES = [
    //     self::READING => 'reading',
    //     self::WRITING => 'writing',
    //     self::LISTENING => 'listening',
    //     self::SPEAKING => 'speaking',
    // ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function readingQuestion()
    {
        return $this->hasOne(ReadingQuestion::class);
    }

    public function writingQuizQuestion()
    {
        return $this->hasOne(WritingQuizQuestion::class);
    }

    public function writingAssessmentQuestion()
    {
        return $this->hasOne(WritingAssessmentQuestion::class);
    }

    public function listenAssessmentQuestion()
    {
        return $this->hasOne(ListenAssessmentQuestion::class);
    }

    public function speakExercisesQuestion()
    {
        return $this->hasOne(SpeakExercisesQuestion::class);
    }

    public function speakAssessmentQuestion()
    {
        return $this->hasOne(SpeakAssessmentQuestion::class);
    }

    public function speakQuizQuestion()
    {
        return $this->hasOne(SpeakQuizQuestion::class);
    }

    public function questionContent()
    {
        $this->quiz->load('exams');
        switch ($this->quiz->exams->type) {
            case \Constants::EXAMINATION_ASSESSMENT:
                return $this->questionTypeAssessment()->first();
            case \Constants::EXAMINATION_EXERCISES:
                return $this->questionTypeExercise()->first();
            case \Constants::EXAMINATION_QUIZ:
                return $this->questionTypeQuiz()->first();
            default:
                return null;
        }
    }

    private function questionTypeAssessment()
    {
        switch ($this->type) {
            case \Constants::COURSE_READING:
                return $this->readingQuestion();
            case \Constants::COURSE_WRITING:
                return $this->writingAssessmentQuestion();
            case \Constants::COURSE_LISTENING:
                return $this->listenAssessmentQuestion();
            case \Constants::COURSE_SPEAKING:
                return $this->speakAssessmentQuestion();
            default:
                return null;
        }
    }

    private function questionTypeExercise()
    {
        switch ($this->type) {
            case \Constants::COURSE_READING:
                return $this->readingQuestion();
            case \Constants::COURSE_WRITING:
                return $this->writingAssessmentQuestion();
            case \Constants::COURSE_LISTENING:
                return $this->listenAssessmentQuestion();
            case \Constants::COURSE_SPEAKING:
                return $this->speakExercisesQuestion();
            default:
                return null;
        }
    }

    private function questionTypeQuiz()
    {
        switch ($this->type) {
            case \Constants::COURSE_READING:
                return $this->readingQuestion();
            case \Constants::COURSE_WRITING:
                return $this->writingQuizQuestion();
            case \Constants::COURSE_LISTENING:
                return $this->listenAssessmentQuestion();
            case \Constants::COURSE_SPEAKING:
                return $this->speakQuizQuestion();
            default:
                return null;
        }
    }
}
