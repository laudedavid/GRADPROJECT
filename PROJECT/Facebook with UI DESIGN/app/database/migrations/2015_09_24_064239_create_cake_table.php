<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCakeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cake', function($table){
			$table->increments('id');
			//$table->foreign('category_id')->references('id')->on('categories');
			$table->string('name');
			$table->decimal('price', 6, 2);
			$table->string('category');
			$table->text('description');
			$table->string('sellersName');
			$table->boolean('availability')->default(1);
			$table->string('image');
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
	}

}
