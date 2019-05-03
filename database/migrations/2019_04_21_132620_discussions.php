<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Discussions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->integer('discussion_user_id')->unsigned(); 
            $table->integer('discussion_category_id')->unsigned();
            $table->text('discussion_title'); 
            $table->longText('discussion_description');
            $table->integer('discussion_views');

            $table->foreign('discussion_user_id')->references('id')->on('users');
            $table->foreign('discussion_category_id')->references('id')->on('categories');

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
        //
        Schema::dropIfExists('discussions');
    }
}
