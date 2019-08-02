<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title1');
            $table->string('title2');
            $table->string('header');
            $table->string('logo');
            $table->string('issn');
            $table->string('url');
            $table->string('email');
            $table->string('address');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('copyRight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
