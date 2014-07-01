<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('advertisements', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();

            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->enum('type', ['supply', 'demand']);
            $table->integer('user_id');

            $table->index('user_id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('advertisements');
	}

}
