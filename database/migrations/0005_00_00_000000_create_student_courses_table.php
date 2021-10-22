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
            $table->text('watched_list');
            $table->bigInteger('lecture_open')->default(0);
            $table->bigInteger('quiz_lecture')->default(0);
            $table->bigInteger('quiz_set')->nullable();
            $table->bigInteger('level')->nullable();
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
