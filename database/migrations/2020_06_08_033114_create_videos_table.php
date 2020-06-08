<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->uuid('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->bigInteger('total_views')->default(0);
            $table->string('hashtag')->nullable();
            $table->uuid('video_type_id');
            $table->bigInteger('total_likes')->default(0);
            $table->bigInteger('total_dislikes')->default(0);
            $table->string('path');          
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
        Schema::dropIfExists('videos');
    }
}
