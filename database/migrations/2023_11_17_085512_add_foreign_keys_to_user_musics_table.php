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
            $table->foreign(['user_id'], 'fk_user')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['music_id'], 'fk_music')->references(['id'])->on('musics')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_musics', function (Blueprint $table) {
            $table->dropForeign('fk_action_user');
            $table->dropForeign('fk_action_music');
        });
    }
};
