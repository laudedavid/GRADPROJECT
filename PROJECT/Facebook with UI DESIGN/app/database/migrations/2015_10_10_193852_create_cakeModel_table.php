<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCakeModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cakeModel', function($table){
			$table->increments('id');
			//$table->foreign('category_id')->references('id')->on('categories');
			$table->string('sellerID');
			$table->string('buyerID');
			$table->string('name');
			$table->decimal('price', 6, 2);
			$table->string('category');
			$table->text('description');
			$table->boolean('availability')->default(1);
			$table->string('image');
			$table->string('layer1');
			$table->string('layer2');
			$table->string('layer3');

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
