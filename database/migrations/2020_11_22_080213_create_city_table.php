<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            // カラム設定
            $table->id()->comment('ID');
            $table->string('name', 10)->comment('市町村');
            $table->string('kana', 10)->comment('市町村かな');
            $table->unsignedBigInteger('prefecture_id')->comment('都道府県ID');
            $table->timestamps();
            $table->softDeletes();

            // リレーション
            $table->foreign('prefecture_id')->references('id')->on('prefecture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
