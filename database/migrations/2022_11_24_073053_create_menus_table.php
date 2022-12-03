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
        Schema::create('menus', function (Blueprint $table) {
            
            $table->id('menu_id');                   // メニューID
            $table->unsignedBigInteger('dining_id'); // 食堂ID（外部キー）
            $table->string('menu_name');             // メニュー名
            $table->string('img_path');              // メニューの紹介画像のパス
            $table->string('menu_price');            // メニューの値段
            $table->string('sold_out');              // 売り切れ状況
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
        Schema::dropIfExists('menus');
    }
};
