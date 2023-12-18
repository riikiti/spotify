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
        Schema::table('news_comments', function (Blueprint $table) {
            $table->foreign(['comment_id'], 'fk_comment_news')->references(['id'])->on('comments')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['news_id'], 'fk_news_user')->references(['id'])->on('news')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news_comments', function (Blueprint $table) {
            $table->dropForeign('fk_comment_news');
            $table->dropForeign('fk_news_user');
        });
    }
};
