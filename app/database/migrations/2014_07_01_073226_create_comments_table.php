<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();

            $table->integer('commentable_id');
            $table->string('commentable_type');

            $table->text('body');
            $table->integer('user_id');

            $table->index('user_id');
            $table->index('commentable_id');
            $table->index('commentable_type');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('comments');
	}

}
