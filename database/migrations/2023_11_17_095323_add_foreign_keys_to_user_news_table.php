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
        Schema::table('user_news', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_user_news')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['news_id'], 'fk_news_user')->references(['id'])->on('news')->onUpdate('CASCADE')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_news', function (Blueprint $table) {
            $table->dropForeign('fk_user_news');
            $table->dropForeign('fk_news_user');
        });
    }
};
