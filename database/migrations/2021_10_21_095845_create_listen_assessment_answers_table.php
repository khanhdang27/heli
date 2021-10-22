<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListenAssessmentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listen_assessment_answers', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('l_a_question_id')
                ->constrained('listen_assessment_questions')
                ->cascadeOnDelete();
            $table->text('answer');
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
        Schema::dropIfExists('listen_assessment_answers');
    }
}
