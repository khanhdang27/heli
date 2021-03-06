<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_examinations', function (Blueprint $table) {
            $table->id();
            // $table
            //     ->foreignId('student_id')
            //     ->constrained('users')
            //     ->cascadeOnDelete();
            // $table
            //     ->foreignId('course_id')
            //     ->constrained('courses')
            //     ->cascadeOnDelete();
            $table
                ->foreignId('student_course_id')
                ->constrained('student_courses')
                ->cascadeOnDelete();
            $table
                ->foreignId('exam_id')
                ->constrained('exams')
                ->cascadeOnDelete();
            $table
                ->foreignId('quiz_id')
                ->constrained('quizzes')
                ->cascadeOnDelete();
            $table
                ->foreignId('question_id')
                ->constrained('questions')
                ->cascadeOnDelete();
            $table->longText('answer');
            $table->integer('answer_type');
            $table->double('time')->nullable();
            $table->longText('comment')->nullable();
            $table->double('score')->nullable();
            $table->boolean('reviewed')->default(false);
            $table->boolean('had_update')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_examinations');
    }
}
