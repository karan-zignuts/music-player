<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file_path')->nullable();
            $table->unsignedBigInteger('artist_id')->unsigned()->nullable();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by')->nullable();
            $table->string( 'updated_by' )->nullable();
            });
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
