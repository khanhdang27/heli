<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecture_id')
                ->constrained('lectures')
                ->cascadeOnDelete();
            $table->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table->foreignId('study_session_id')
                ->constrained('study_sessions')
                ->cascadeOnDelete();
            $table->foreignId('tutor_id')
                ->constrained('tutors')
                ->cascadeOnDelete();
            $table->boolean('is_test');
            $table->date('date');
            $table->unique(['course_id', 'study_session_id', 'tutor_id', 'is_test', 'date'], 'course_schedules_unique');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_schedules');
    }
}
