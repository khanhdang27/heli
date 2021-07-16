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
            $table->bigInteger('course_discount_id')->nullable();
            $table->bigInteger('membership_course_id')->constrained('membership_course');            
            $table->boolean('recommended')->default(false);
            $table->boolean('welcomes')->default(false);
            $table->boolean('hot')->default(false);
            $table->boolean('publish')->default(false);
            // price_tag wil be a function
            $table->text('description')->nullable();

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
