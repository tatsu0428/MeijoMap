<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_news', function (Blueprint $table) {
            
            $table->id('news_id');                 // ニュースID
            $table->unsignedBigInteger('shop_id'); // ショップID（外部キー）
            $table->string('news_title');          // タイトル
            $table->text('news_content');          // 内容
            $table->string('img_path');            // 添付画像のパス
            $table->timestamps();                  // created_atとupdated_at
            $table->softDeletes();                 // deleted_at
            $table->foreign('shop_id')->references('shop_id')->on('shops')->onUpdate('CASCADE')->onDelete('CASCADE'); // 外部キーの設定
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_news');
    }
};
