<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')
               ->constrained('tutors')
               ->cascadeOnDelete();
            $table->string('tutor_info');
            $table->string('tutor_level');
            $table->string('tutor_specialized');
            $table->string('tutor_experience');
            $table->string('locale')->index();
            $table->unique(['tutor_id', 'locale']);
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
        Schema::dropIfExists('tutor_translations');
    }
}
