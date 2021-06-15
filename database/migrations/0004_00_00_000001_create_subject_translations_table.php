<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_translations', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name');
            $table->foreignId('subject_id')
                ->constrained('subjects')
                ->cascadeOnDelete();
            $table->string('locale')->index();
            $table->unique(['subject_id', 'locale']);
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
        Schema::create('subject_translations', function (Blueprint $table) {
            $table->dropForeignKey('subject_id');
        });
        Schema::dropIfExists('subject_translations');
    }
}
