<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFromTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('from', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('l_name', 50)->comment('姓');
            $table->string('f_name', 50)->comment('名');
            $table->integer('prefecture_id')->comment('都道府県ID');
            $table->integer('city_id')->comment('市町村ID');
            $table->string('address_etc', 100)->comment('番地等');
            $table->string('postal_code', 8)->comment('郵便番号');
            $table->integer('user_id')->comment('ユーザーID');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('from');
    }
}
