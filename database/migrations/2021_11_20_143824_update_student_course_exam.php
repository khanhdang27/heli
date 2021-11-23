<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentCourseExam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();
        // Schema::table('student_examinations', function (Blueprint $table) {
        //     $table->dropForeign(['student_id']);
        //     $table->dropForeign(['course_id']);
        //     $table->dropColumn(['student_id', 'course_id']);
        //     $table
        //         ->foreignId('student_course_id')
        //         ->constrained('student_courses')
        //         ->cascadeOnDelete();
        // });
        // Schema::table('student_courses', function (Blueprint $table) {
        //     $table->dateTime('failed')->nullable();

        //     $table->dropUnique(['student_id', 'course_id']);
        //     $table->unique(['student_id', 'course_id', 'failed']);
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
