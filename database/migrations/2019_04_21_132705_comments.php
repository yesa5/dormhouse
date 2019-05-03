<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

            $table->bigIncrements('id');
        
            $table->integer('comment_user_id')->unsigned(); 
            $table->integer('comment_discussion_id')->unsigned();
            $table->integer('comment_parent_id')->nullable(); 
            $table->text('comment_description');
        
            $table->foreign('comment_user_id')->references('id')->on('users');
            $table->foreign('comment_discussion_id')->references('id')->on('discussions');
        
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
        Schema::dropIfExists('comments');
    }
}
