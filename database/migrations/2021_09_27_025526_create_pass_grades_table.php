<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pass_grades', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('exam_id')
                ->constrained('exams')
                ->cascadeOnDelete();
            $table->double('score');
            $table->integer('lecture_index');
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
        Schema::dropIfExists('pass_grades');
    }
}
