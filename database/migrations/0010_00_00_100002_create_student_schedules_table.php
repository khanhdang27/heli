<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table->foreignId('room_live_course_id')
                ->constrained('room_live_courses')
                ->cascadeOnDelete();
            $table->foreignId('study_session_id')
                ->constrained('study_sessions')
                ->cascadeOnDelete();
            $table->foreignId('tutor_id')
                ->constrained('tutors')
                ->cascadeOnDelete();
            $table->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->boolean('is_test')->default(false);
            $table->date('date');
            $table->text('note')->nullable();
            $table->unique(['course_id', 'study_session_id', 'is_test', 'student_id', 'date'], 'student_schedules_unique');
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
        Schema::dropIfExists('student_schedules');
    }
}
