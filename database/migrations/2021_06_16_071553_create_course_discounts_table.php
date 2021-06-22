<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('discount_id')->constrained('discounts');
            $table->unique(['course_id', 'discount_id']);
            $table->double('discount_value');
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
        Schema::dropIfExists('course_discounts');
    }
}
