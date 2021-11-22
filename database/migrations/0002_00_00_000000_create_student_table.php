<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->string('full_name')->nullable();
            $table->date('day_of_birth')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('education_level')->nullable();

            $table->double('level_read')->nullable();
            $table->double('level_write')->nullable();
            $table->double('level_speak')->nullable();
            $table->double('level_listen')->nullable();

            $table->double('exam_buy_read')->nullable(); // id of exam buy with token [5.5] -> fail x4 => [5.0]
            $table->double('exam_buy_write')->nullable(); // id of exam buy with token
            $table->double('exam_buy_speak')->nullable(); // id of exam buy with token
            $table->double('exam_buy_listen')->nullable(); // id of exam buy with token

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
        Schema::dropIfExists('student');
    }
}
