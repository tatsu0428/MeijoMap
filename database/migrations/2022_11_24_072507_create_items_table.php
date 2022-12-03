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
        Schema::create('items', function (Blueprint $table) {
            
            $table->id('item_id');                 // 商品ID
            $table->unsignedBigInteger('shop_id'); // ショップID（外部キー）
            $table->string('item_name');           // 商品名
            $table->string('img_path');            // 商品の紹介画像のパス
            $table->string('item_price');          // 商品の値段
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
        Schema::dropIfExists('items');
    }
};
