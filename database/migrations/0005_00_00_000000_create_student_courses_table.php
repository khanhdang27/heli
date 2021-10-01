<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table
                ->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->dateTime('latest_study');
            $table->bigInteger('lecture_study');
            $table->json('watched_list');
            $table->bigInteger('lecture_open')->nullable();
            $table->bigInteger('quiz_lecture')->nullable();
            $table->bigInteger('level_quiz')->nullable();
            $table->string('room_live_course_id')->nullable();
            $table->unique(['student_id', 'course_id']);
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
        Schema::dropIfExists('student_courses');
    }
}
