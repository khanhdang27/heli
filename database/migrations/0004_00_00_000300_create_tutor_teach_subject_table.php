<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTeachSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_teach_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')
                ->constrained('tutors');
            $table->foreignId('subject_id')
                ->constrained('subjects');
            $table->timestamps();
            $table->unique(['tutor_id', 'subject_id']);
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
        Schema::dropIfExists('tutor_teach_subject');
    }
}
