<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination', function (Blueprint $table) {
            // カラム設定
            $table->id()->comment('ID');
            $table->string('l_name', 50)->comment('姓');
            $table->string('f_name', 50)->comment('名');
            $table->unsignedBigInteger('prefecture_id')->comment('都道府県ID');
            $table->unsignedBigInteger('city_id')->comment('市町村ID');
            $table->string('address_etc', 100)->comment('番地等');
            $table->string('postal_code', 8)->comment('郵便番号');
            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->boolean('favorite')->default(false)->comment('お気に入り');
            $table->timestamps();
            $table->softDeletes();

            // リレーション
            $table->foreign('prefecture_id')->references('id')->on('prefecture');
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destination');
    }
}
