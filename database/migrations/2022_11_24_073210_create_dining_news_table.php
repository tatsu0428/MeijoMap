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
        Schema::create('dining_news', function (Blueprint $table) {
            
            $table->id('news_id');                   // ニュースID
            $table->unsignedBigInteger('dining_id'); // 施設ID（外部キー）
            $table->string('news_title');            // タイトル
            $table->text('news_content');            // 内容
            $table->string('img_path');              // 添付画像のパス
            $table->timestamps();                    // created_atとupdated_at
            $table->softDeletes();                   // deleted_at
            $table->foreign('dining_id')->references('dining_id')->on('dinings')->onUpdate('CASCADE')->onDelete('CASCADE'); // 外部キーの設定
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dining_news');
    }
};
