<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->string('payment_id');
            $table->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table->bigInteger('membership'); // membership_level
            $table->double('membership_discount'); // membership_discount_value
            $table->bigInteger('discount_info'); // discount_detail
            $table->double('course_price'); // course raw
            $table->double('course_discount'); // percent when course apply discount
            $table->double('final_price'); // final price after apply discount
            $table->integer('status');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
}