<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreenshotsTable extends Migration {

	public function up(){
		Schema::create('screenshots', function($table){
			//Games all have an id and a name
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('screenshots');
	}


}
