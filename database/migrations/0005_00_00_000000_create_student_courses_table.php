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
            $table->bigInteger('room_live_course_id')->nullable();
            $table->dateTime('latest_study')->nullable(); // ngay gio moi học
            $table->bigInteger('lecture_study')->nullable(); // 3 index
            $table->text('watched_list')->nullable(); // [ 1, 2, ]

            // $table->double('level_read')->nullable();
            // $table->double('level_write')->nullable();
            // $table->double('level_speak')->nullable();
            // $table->double('level_listen')->nullable();

            // $table->bigInteger('exam_read')->nullable(); // id of exam on doing
            // $table->bigInteger('exam_write')->nullable(); // id of exam on doing
            // $table->bigInteger('exam_speak')->nullable(); // id of exam on doing
            // $table->bigInteger('exam_listen')->nullable(); // id of exam on doing

            // $table->bigInteger('set_exam_read')->nullable(); // number of set exam doing
            // $table->bigInteger('set_exam_write')->nullable(); // number of set exam doing
            // $table->bigInteger('set_exam_speak')->nullable(); // number of set exam doing
            // $table->bigInteger('set_exam_listen')->nullable(); // number of set exam doing
            $table->bigInteger('set_exam')->nullable(); // number of set exam doing

            // $table->double('exam_buy_read')->nullable(); // id of exam buy with token [5.5] -> fail x4 => [5.0]
            // $table->double('exam_buy_write')->nullable(); // id of exam buy with token
            // $table->double('exam_buy_speak')->nullable(); // id of exam buy with token
            // $table->double('exam_buy_listen')->nullable(); // id of exam buy with token

            $table->boolean('passed')->default(false);
            $table->dateTime('failed')->nullable();
            $table->unique(['student_id', 'course_id', 'failed']);
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
