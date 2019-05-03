<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Votes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {

            $table->bigIncrements('id');
          
            $table->integer('vote_user_id')->unsigned(); 
            $table->integer('vote_discussion_id')->unsigned();
            $table->boolean('vote_is_like');
          
            $table->foreign('vote_user_id')->references('id')->on('users');
            $table->foreign('vote_discussion_id')->references('id')->on('discussions');
          
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
        Schema::dropIfExists('votes');
    }
}
