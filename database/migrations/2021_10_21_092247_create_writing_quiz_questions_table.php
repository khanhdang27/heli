<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingQuizQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_quiz_questions', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('question_id')
                ->constrained('questions')
                ->cascadeOnDelete();
            $table->integer('part');
            $table->text('question');
            $table->text('message_wrong');
            $table->bigInteger('lecture_index');
            $table->boolean('long_answer');
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
        Schema::dropIfExists('writing_quiz_questions');
    }
}
