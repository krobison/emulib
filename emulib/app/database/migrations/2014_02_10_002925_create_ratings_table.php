<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration {

	public function up(){
		Schema::create('ratings', function($table){
			//Games all have an id and a name
			$table->increments('id');
			$table->string('name');
			$table->string('rating');
			$table->string('class');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('ratings');
	}

}
