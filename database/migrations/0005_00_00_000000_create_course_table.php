<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('subject_id')
                ->constrained('subjects')
                ->cascadeOnDelete();
            $table
                ->foreignId('tutor_id')
                ->constrained('tutors')
                ->cascadeOnDelete();
            $table->integer('type');
            $table->integer('type_part');
            $table->double('level');
            $table->longText('course_overview');
            $table->double('course_price');
            $table->boolean('published')->default(false);
            $table->bigInteger('like_no')->default(0);
            $table->bigInteger('comment_no')->default(0);
            $table->bigInteger('rating_no')->default(0);
            $table->bigInteger('rating_average')->default(0);
            $table->text('related')->nullable();
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
        Schema::dropIfExists('course');
    }
}
