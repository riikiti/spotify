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
        Schema::table('user_comments', function (Blueprint $table) {
            $table->foreign(['user_id'], 'fk_user_comment')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['comment_id'], 'fk_comment_user')->references(['id'])->on('comments')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_comments', function (Blueprint $table) {
            $table->dropForeign('fk_user_comment');
            $table->dropForeign('fk_comment_user');
        });
    }
};
