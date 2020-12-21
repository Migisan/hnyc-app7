<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            // カラム設定
            $table->id()->comment('ID');
            $table->unsignedBigInteger('user_id')->comment('ユーザーID');
            $table->unsignedBigInteger('from_id')->comment('差出人ID');
            $table->unsignedBigInteger('destination_id')->comment('宛先人ID');
            $table->timestamps();
            $table->softDeletes();

            // リレーション
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('from_id')->references('id')->on('from');
            $table->foreign('destination_id')->references('id')->on('destination');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
}
