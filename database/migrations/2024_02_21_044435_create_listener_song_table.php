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
        Schema::create('listener_song', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("song_id");
            $table->foreign("song_id")->references("id")->on("songs")->onDelete("cascade");
           
            $table->unsignedBigInteger("listener_id");
            $table->foreign("listener_id")->references("id")->on("listeners")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listener_song');
    }
};
