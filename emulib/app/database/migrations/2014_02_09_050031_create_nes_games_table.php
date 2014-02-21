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
			$table->date('release_japan')->nullable()->default(null);
			$table->date('release_pal')->nullable()->default(null);
			$table->date('release_usa')->nullable()->default(null);
			
			//Max number of players
			$table->tinyInteger('players')->default(1);
			
			//FILENAME prefix for sound/manual/boxart/cart/screenshots
			$table->string('filename');
			
			
			//if the game has different medias
			$table->boolean('boxart')->default(false);
			$table->boolean('cartridge')->default(false);
			$table->boolean('manual')->default(false);
			$table->boolean('sound')->default(false);
			$table->string('sound_description')->default(" ");
			
			
			
			//Creators
			$table->string('publisher')->nullable()->default(null);
			$table->string('developer')->nullable()->default(null);
			$table->string('producer')->nullable()->default(null);
			
			$table->string('series')->nullable()->default(null);
			
			//Content Ratings (filenames to the correct rating picture)
			$table->string('acb')->nullable()->default(null);
			$table->string('cero')->nullable()->default(null);
			$table->string('esrb')->nullable()->default(null);
			$table->string('pegi')->nullable()->default(null);
			
			$table->text('description')->nullable();
			
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('nes_games');
	}

}
