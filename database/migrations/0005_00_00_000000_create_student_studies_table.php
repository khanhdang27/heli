<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_studies', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('course_id')
                    ->constrained('courses')
                    ->cascadeOnDelete();
            $table
                ->foreignId('student_id')
                    ->constrained('students')
                    ->cascadeOnDelete();
            $table->unique(['student_id', 'course_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_studies');
    }
}
