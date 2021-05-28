<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoManageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_video_translations', function (Blueprint $table) {
            $table->id();
            $table->string('course_video_name');
            $table->text('course_video_description');
            $table->foreignId('course_video_id')
                ->constrained('video_manage')
                ->cascadeOnDelete();
            $table->string('locale')->index();
            $table->unique(['course_video_id', 'locale']);
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
        Schema::dropIfExists('course_video_translations');
    }
}
