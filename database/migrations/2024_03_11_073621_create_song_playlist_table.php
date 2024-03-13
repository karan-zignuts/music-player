<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('song_playlist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('song_id')->unsigned()->nullable();
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');    
            $table->unsignedBigInteger('playlist_id')->unsigned()->nullable();
            $table->foreign('playlist_id')->references('id')->on('playlists');    
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by')->nullable();
            $table->string( 'updated_by' )->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('song_playlist');
    }
};
