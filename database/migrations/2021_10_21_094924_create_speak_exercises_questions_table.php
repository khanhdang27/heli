<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakExercisesQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speak_exercises_questions', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('question_id')
                ->constrained('questions')
                ->cascadeOnDelete();
            $table->string('video_code_practice');
            $table->string('video_code_response');
            $table->text('question');
            $table->text('message_wrong');
            $table->bigInteger('lecture_index');
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
        Schema::dropIfExists('speak_exercises_questions');
    }
}
