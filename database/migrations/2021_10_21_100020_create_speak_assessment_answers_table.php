<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakAssessmentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speak_assessment_answers', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('s_a_question_id')
                ->constrained('speak_assessment_questions')
                ->cascadeOnDelete();
            $table->text('answer');
            $table->text('is_correct');
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
        Schema::dropIfExists('speak_assessment_answers');
    }
}
