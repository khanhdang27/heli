<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->double('level_read')->nullable();
            $table->double('level_write')->nullable();
            $table->double('level_speak')->nullable();
            $table->double('level_listen')->nullable();

            $table->double('exam_buy_read')->nullable(); // id of exam buy with token [5.5] -> fail x4 => [5.0]
            $table->double('exam_buy_write')->nullable(); // id of exam buy with token
            $table->double('exam_buy_speak')->nullable(); // id of exam buy with token
            $table->double('exam_buy_listen')->nullable(); // id of exam buy with token
        });

        Schema::table(
            'courses',
            function (Blueprint $table) {
                $table->double('level');
                $table->integer('type_part');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}