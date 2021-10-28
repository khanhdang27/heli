<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioListeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_listenings', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table
                ->foreignId('exam_id')
                ->constrained('exams')
                ->cascadeOnDelete();
            $table
                ->foreignId('quiz_id')
                ->constrained('quizzes')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('audio_listenings');
    }
}
