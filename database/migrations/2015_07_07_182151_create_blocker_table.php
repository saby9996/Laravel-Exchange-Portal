<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function(Blueprint $table){
            $table->increments('id');

            $table->integer('blocker')->unsigned()->index();
            $table->foreign('blocker')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->integer('blockee')->unsigned()->index();
            $table->foreign('blockee')->references('id')
                  ->on('users')->onDelete('cascade');

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
        Schema::drop('blocks');
    }
}
