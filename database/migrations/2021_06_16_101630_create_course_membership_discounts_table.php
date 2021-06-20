<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseMembershipDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // as a price tag
        Schema::create('course_membership_discounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('discounts_id')->nullable();
            $table->double('membership_course_id')->nullable();
            $table->double('course_discount_id')->nullable();

            $table->foreignId('membership_id')->constrained('memberships');
            $table->foreignId('course_id')->constrained('courses');
            $table->boolean('recommended');
            // price_tag wil be a function
            $table->text('description');

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
        Schema::dropIfExists('course_membership_discounts');
    }
}
