<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function(Blueprint $table){
            $table->increments('id');

            $table->string('addressable_type');

            $table->integer('addressable_id')->unsigned()->index();
            
            $table->text('line1');
            
            $table->text('line2')->nullable();

            $table->integer('location_id')->unsigned()->index();
            $table->foreign('location_id')->references('id')
                  ->on('locations')->onDelete('cascade');

            $table->string('pincode', 7);

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
        Schema::drop('addresses');
    }
}
