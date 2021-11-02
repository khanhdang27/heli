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
            $table->bigInteger('room_live_course_id');
            $table->dateTime('latest_study');
            $table->bigInteger('lecture_study');
            $table->text('watched_list');
            
            $table->bigInteger('level_read');
            $table->bigInteger('level_write');
            $table->bigInteger('level_speak');
            $table->bigInteger('level_listen');

            $table->text('open_lecture_part_read');
            $table->text('open_lecture_part_write');
            $table->text('open_lecture_part_speak');
            $table->text('open_lecture_part_listen');

            $table->boolean('passed')->default(false);
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
