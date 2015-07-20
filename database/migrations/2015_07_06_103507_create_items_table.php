<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table){
            $table->increments('id');
            
            $table->integer('owner')->unsigned()->index();
            $table->foreign('owner')->references('id')
                  ->on('users')->onDelete('cascade');

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')
                  ->on('categories')->onDelete('cascade');

            $table->string('title', 40);

            $table->string('slug', 50);
            
            $table->text('description');

            $table->timestamp('exchange_from');
            
            $table->timestamp('exchange_till');
            
            $table->boolean('exchange')->default(0);
            
            $table->softDeletes();
            
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
        Schema::drop('items');
    }
}
