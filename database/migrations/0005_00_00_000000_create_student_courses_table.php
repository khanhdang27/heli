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
            $table->dateTime('latest_study'); // ngay gio moi học
            $table->bigInteger('lecture_study'); // 3 index
            $table->text('watched_list'); // [ 1, 2, ]

            $table->double('level_read');
            $table->double('level_write');
            $table->double('level_speak');
            $table->double('level_listen');

            $table->bigInteger('exam_read'); // id of exam on doing
            $table->bigInteger('exam_write'); // id of exam on doing
            $table->bigInteger('exam_speak'); // id of exam on doing
            $table->bigInteger('exam_listen'); // id of exam on doing

            $table->bigInteger('set_exam_read'); // number of set exam doing
            $table->bigInteger('set_exam_write'); // number of set exam doing
            $table->bigInteger('set_exam_speak'); // number of set exam doing
            $table->bigInteger('set_exam_listen'); // number of set exam doing

            $table->double('exam_buy_read'); // id of exam buy with token [5.5] -> fail x4 => [5.0]
            $table->double('exam_buy_write'); // id of exam buy with token
            $table->double('exam_buy_speak'); // id of exam buy with token
            $table->double('exam_buy_listen'); // id of exam buy with token

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
