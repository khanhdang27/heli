<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMaterialTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_material_translations', function (Blueprint $table) {
            $table->id();
            $table->string('course_material_name');
            $table->string('course_material_description');
            $table->string('course_material_origin');
            $table->foreignId('course_material_id')
                ->constrained('course_material')
                ->cascadeOnDelete();
            $table->string('locale')->index();
            $table->unique(['course_material_id', 'locale']);
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
        Schema::dropIfExists('course_material_translations');
    }
}
