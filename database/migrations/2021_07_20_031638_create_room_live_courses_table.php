<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomLiveCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_live_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();
            $table->foreignId('study_session_id')
                ->constrained('study_sessions')
                ->cascadeOnDelete();
            $table->dateTime('start_date');
            $table->integer('number_session');
            $table->integer('number_member_maximum');
            $table->integer('number_member_maximum');

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
        Schema::dropIfExists('room_live_courses');
    }
}
