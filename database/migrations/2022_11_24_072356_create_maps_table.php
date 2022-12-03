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
        Schema::create('maps', function (Blueprint $table) {
            
            $table->id('map_id');            // マップID
            $table->string('building_name'); // 建物名
            $table->string('img_path');      // 建物の紹介画像のパス
            $table->text('introduction');    // 紹介文
            $table->float('top', 8, 2);      // top
            $table->float('left', 8, 2);     // left
            $table->timestamps();            // created_atとupdated_at
            $table->softDeletes();           // deleted_at
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maps');
    }
};
