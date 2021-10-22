<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingAssessmentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_assessment_answers', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('w_a_question_id')
                ->constrained('writing_assessment_questions')
                ->cascadeOnDelete();
            $table->text('answer');
            $table->boolean('is_correct');
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
        Schema::dropIfExists('writing_assessment_answers');
    }
}
