<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnStudentCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_courses', function (Blueprint $table) {
            $table->text('watched_list');
            $table->bigInteger('lecture_open')->default(0);
            $table->bigInteger('quiz_lecture')->default(0);
            $table->bigInteger('level_quiz')->nullable();
            $table->boolean('passed')->default(false);
        });

        Schema::table('lectures', function (Blueprint $table) {
            $table->integer('index')->default(0);
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->text('related')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
