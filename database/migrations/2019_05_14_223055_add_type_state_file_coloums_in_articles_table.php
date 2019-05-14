<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeStateFileColoumsInArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('file_id');
            $table->foreign('type_id')->references('id')->on('article_types')->OnDelete('cascade');
            $table->foreign('state_id')->references('id')->on('article_states')->OnDelete('cascade');
            $table->foreign('file_id')->references('id')->on('article_files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('type_id');
            $table->dropColumn('state_id');
            $table->dropColumn('file_id');
        });
    }
}
