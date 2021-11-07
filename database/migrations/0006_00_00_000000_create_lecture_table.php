<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->integer('level')->nullable(true);
            $table->integer('type')->nullable(true);
            $table->integer('index')->default(0);
            $table
                ->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table->string('lectures_name');
            $table->text('lectures_description');
            $table->string('video_resource');
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
        Schema::dropIfExists('lectures');
    }
}
