<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reading_answers', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('reading_question_id')
                ->constrained('reading_questions')
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
        Schema::dropIfExists('reading_answers');
    }
}
