<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNesGamesTable extends Migration {

	public function up(){
		Schema::create('nes_games', function($table){
			//Games all have an id and a name
			$table->increments('id');
			$table->string('name');
			
			//NES games have 3 general release regions
			$table->date('release_japan')->nullable();
			$table->date('release_pal')->nullable();
			$table->date('release_usa')->nullable();
			
			//Max number of players
			$table->tinyInteger('players');
			
			//FILENAME prefix for sound/manual/boxart/cart/screenshots
			$table->string('filename');
			
			
			//if the game has different medias
			$table->boolean('boxart');
			$table->boolean('cartridge');
			$table->boolean('manual');
			$table->boolean('sound');
			$table->string('sound_description');
			
			
			
			//Creators
			$table->string('publisher')->nullable();
			$table->string('developer')->nullable();
			$table->string('producer')->nullable();
			
			$table->string('series')->nullable();
			
			//Content Ratings (filenames to the correct rating picture)
			$table->string('acb')->nullable();
			$table->string('cero')->nullable();
			$table->string('esrb')->nullable();
			$table->string('pegi')->nullable();
			
			$table->text('description')->nullable();
			
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('nes_games');
	}

}
