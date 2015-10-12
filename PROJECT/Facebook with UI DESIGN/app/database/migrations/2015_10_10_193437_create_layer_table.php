<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('layer', function($table){
			$table->increments('id');
			//$table->foreign('category_id')->references('id')->on('categories');
			$table->string('name');
			$table->string('image');
			$table->timestamps();
			$table->string('box');
			$table->string('BaseLayer');

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
