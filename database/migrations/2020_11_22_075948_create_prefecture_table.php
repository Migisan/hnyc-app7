<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrefectureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefecture', function (Blueprint $table) {
            // カラム設定
            $table->id()->comment('ID');
            $table->string('name', 10)->comment('都道府県');
            $table->string('kana', 10)->comment('都道府県かな');
            $table->timestamps();
            $table->softDeletes();

            // リレーション
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prefecture');
    }
}
