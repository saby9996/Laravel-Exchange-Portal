<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spreferences', function(Blueprint $table){
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->integer('item_id')->unsigned()->index();
            $table->foreign('item_id')->references('id')
                  ->on('items')->onDelete('cascade');

            // BlockeeItems refers to items of the blockee who is blocked.
            // OnlyItem refers to the item which is blocked.
            $table->enum('block_type', ['BlockeeItems','OnlyItem']);

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
        Schema::drop('spreferences');
    }
}
