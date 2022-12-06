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
        Schema::create('users', function (Blueprint $table) {
            
            $table->id('user_id');                              // ユーザーID
            $table->string('name');                             // ユーザー名
            $table->string('email')->unique();                  // E-mailアドレス
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                         // パスワード
            $table->unsignedBigInteger('role_id');              // 役割名（外部キー）
            $table->rememberToken();
            $table->timestamps();                               // created_atとupdated_at
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
        Schema::dropIfExists('users');
    }
};
