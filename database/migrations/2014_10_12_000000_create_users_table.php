<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
          //  $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
          //  $table->string('salutation');
          //  $table->string('contact_type');
          //  $table->string('degree');
          //  $table->string('discipline');
          //  $table->string('url');
          //  $table->string('mobile');
          //  $table->string('phone');
          //  $table->string('fax');
          //  $table->unsignedInteger('province_id');
          //  $table->string('city');
          //  $table->string('mailing_address');
          //  $table->tinyInteger('disabled')->default('0'); //tiny int
          //  $table->text('disabled_reason');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
