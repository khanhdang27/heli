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
            $table->json('watched_list');
            $table->bigInteger('lecture_open')->nullable();
            $table->bigInteger('quiz_lecture')->nullable();
            $table->bigInteger('level_quiz')->nullable();
        });

        Schema::table('lectures', function (Blueprint $table) {
            $table->integer('index')->default(0);
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->text('related')->default(0);
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
