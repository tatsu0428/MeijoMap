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
        Schema::create('institutions', function (Blueprint $table) {
            
            $table->id('institution_id');         // 施設ID
            $table->string('institution_name');   // 施設名
            $table->string('img_path');           // 施設の紹介画像のパス
            $table->text('introduction');         // 紹介文
            $table->string('business_hours');     // 営業時間
            $table->unsignedBigInteger('map_id'); // マップID（外部キー）
            $table->timestamps();                 // created_atとupdated_at
            $table->softDeletes();                // deleted_at
            $table->foreign('map_id')->references('map_id')->on('maps')->onUpdate('CASCADE')->onDelete('CASCADE'); // 外部キーの設定
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
};
