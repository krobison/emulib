<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration {

	public function up(){
		Schema::create('genres', function($table){
			//Games all have an id and a name
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('genres');
	}
	
}
