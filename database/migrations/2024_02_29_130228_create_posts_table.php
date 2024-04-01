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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('標題');
            $table->text('content')->comment('文章內容'); 
            $table->text('tags')->comment('標籤(逗號字串存取)');
            $table->unsignedBigInteger('category_id')->comment('分類ID'); // 
            $table->unsignedBigInteger('user_id')->comment('創建者（使用者 ID）');
            $table->timestamps();
            // 定義外鍵關係
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
