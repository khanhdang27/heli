<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_discount', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_id')->constrained('memberships');
            $table->foreignId('discount_id')->constrained('discounts');
            $table->unique(['membership_id', 'discount_id']);
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
        Schema::dropIfExists('membership_discount');
    }
}
