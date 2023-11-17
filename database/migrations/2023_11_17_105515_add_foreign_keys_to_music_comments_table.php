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
        Schema::table('music_comments', function (Blueprint $table) {
            $table->foreign(['music_id'], 'fk_music_comment')->references(['id'])->on('musics')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['comment_id'], 'fk_comment_music')->references(['id'])->on('comments')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('music_comments', function (Blueprint $table) {
            $table->dropForeign('fk_music_comment');
            $table->dropForeign('fk_comment_music');
        });
    }
};
