<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakExercisesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speak_exercises_answers', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('s_e_question_id')
                ->constrained('speak_exercises_questions')
                ->cascadeOnDelete();
            $table->string('audio_ref');
            $table->softDeletes();
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
        Schema::dropIfExists('speak_exercises_answers');
    }
}
