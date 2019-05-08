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
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('salutation'); //onvan =>dr,eng etc
            $table->string('contact_type'); //tahsilat
            $table->string('degree'); // daraje elmi
            $table->string('discipline'); //reshte
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('province'); //ostan
            $table->string('city'); //shahr
            $table->string('mailing_address'); //address posti
            $table->string('zip_code'); //Code posti
            $table->tinyInteger('disabled')->default('1'); //tiny int
            $table->text('disabled_reason')->nullable();
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
