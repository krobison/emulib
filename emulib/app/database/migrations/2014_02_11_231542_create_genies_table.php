<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeniesTable extends Migration {

	public function up(){
		Schema::create('genies', function($table){
			//Games all have an id and a name
			$table->increments('id');
			$table->string('code')->nullable();
			$table->text('description');
			$table->boolean('twoColumn')->default(false);
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('genies');
	}

}
