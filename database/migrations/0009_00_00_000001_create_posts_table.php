<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->text('title')->nullable()->default(null);
            $table->text('content')->nullable()->default(null);
            $table->bigInteger('file_id')->nullable()->default(null);
            $table->bigInteger('like_no')->default(0);
            $table->bigInteger('comment_no')->default(0);
            $table->boolean('close_post')->default(0);
            $table->bigInteger('pin_comment')->nullable()->default(null);
            $table->bigInteger('tag_id')->nullable()->default(null);
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
        Schema::dropIfExists('posts');
    }
}
