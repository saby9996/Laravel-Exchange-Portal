<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function(Blueprint $table){
            $table->increments('id');

            $table->integer('source_type')->unsigned()->index();
            $table->foreign('source_id')->references('id')
                  ->on('sources')->onDelete('cascade');

            $table->integer('source_id')->unsigned()->index();

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->string('message');

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
        Schema::drop('notifications');
    }
}
