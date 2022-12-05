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
        Schema::create('map_users', function (Blueprint $table) {
            
            $table->id('user_id');                 // ユーザーID
            $table->string('user_name', 50);       // ユーザー名
            $table->string('password', 50);        // パスワード
            $table->unsignedBigInteger('role_id'); // 役割名（外部キー）
            $table->timestamps();                  // created_atとupdated_at
            $table->softDeletes();                 // deleted_at
            $table->foreign('role_id')->references('role_id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE'); // 外部キーの設定
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_users');
    }
};