<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('student_courses', function (Blueprint $table) {
        //     $table->dropColumn(['level_read', 'level_write', 'level_speak', 'level_listen', 'exam_read', 'exam_write', 'exam_speak', 'exam_listen', 'set_exam_read', 'set_exam_write', 'set_exam_speak', 'set_exam_listen', 'exam_buy_read', 'exam_buy_write', 'exam_buy_speak', 'exam_buy_listen']);
        //     $table->bigInteger('set_exam')->nullable();
        // });
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
