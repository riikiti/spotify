<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user_musics', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_user_music')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['music_id'], 'fk_music_user')->references(['id'])->on('musics')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_musics', function (Blueprint $table) {
            $table->dropForeign('fk_user_music');
            $table->dropForeign('fk_music_user');
        });
    }
};
