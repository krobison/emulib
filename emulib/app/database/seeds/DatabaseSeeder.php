<?php

class DatabaseSeeder extends Seeder {

	public function run(){
		Eloquent::unguard();

		$this->call('NesSeeder');
	}

}

class NesSeeder extends Seeder {

    public function run(){
        DB::table('nes_games')->delete();
		$superMarioBros3 = NesGame::create(array(
			'name' => 'Super Mario Bros. 3',
			'release_japan' => '1988-10-23',
			'release_pal' => '1991-08-29',
			'release_usa' => '1990-02-12',
			'players' => 2,
			'filename' => 'supermariobros3',
			'boxart' => true,
			'cartridge' => true,
			'manual' => true,
			'sound' => true,
			'sound_description' => 'Overworld',
			'publisher' => 'Nintendo',
			'developer' => 'Nintendo R&D',
			'producer' => 'Shigeru Miyamoto',
			'series' => 'Super Mario',
			'acb' => 'acb_g.png',
			'cero' => 'cero_a.png',
			'esrb' => 'esrb_e.png',
			'pegi' => 'pegi_3.png',
			'description' => 'Super Mario Bros. 3 is a platform video game developed and published by Nintendo for the Famicom/NES,
			and is the third game in the Super Mario series. The game was released in Japan in 1988, in the United States in 1990, 
			and in Europe in 1991. Development was handled by Nintendo Entertainment Analysis and Development, led by Shigeru Miyamoto, 
			who directed the game along with Takashi Tezuka. <br><br>
			The game focuses on Mario and his brother Luigi, who embark on a quest to save Princess Toadstool and the rulers of seven 
			different kingdoms from the series\' primary antagonist, Bowser, and his children, the Koopalings. The two must traverse a 
			total of eight separate regions in order to restore order to the Mushroom World. Super Mario Bros. 3 builds on the gameplay 
			of previous Mario games by introducing new power-ups used to augment character abilities, establishing several conventions 
			that have also been featured in later titles of the franchise.<br><br>'
		));
		
		DB::table('genres')->delete();
		Genre::create(array(
			'name' => 'platformer'
		));
		Genre::create(array(
			'name' => 'adventure'
		));
		
		$platformer = DB::table('genres')->where('name', 'platformer')->first();
		$adventure = DB::table('genres')->where('name', 'adventure')->first();
		
		DB::table('genre_nes_game')->delete();
		DB::table('nes_game_rating')->delete();
		DB::table('nes_game_screenshot')->delete();
		$superMarioBros3->genres()->attach($platformer->id);
		$superMarioBros3->ratings()->attach(Rating::create(array('name' => 'Allgame','rating' => '&#9733;&#9733;&#9733;&#9733;&#9733;','class' => 'goodRating'))->id);
		$superMarioBros3->ratings()->attach(Rating::create(array('name' => 'Gamespot','rating' => '9.0/10','class' => 'goodRating'))->id);
		$superMarioBros3->ratings()->attach(Rating::create(array('name' => 'IGN','rating' => '9.5/10','class' => 'goodRating'))->id);
		$superMarioBros3->ratings()->attach(Rating::create(array('name' => 'The Video Game Critic','rating' => 'A+','class' => 'goodRating'))->id);
		$superMarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'On An Airship','description' => 'Bullets everywhere!'))->id);
		$superMarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'In A Desert Level','description' => 'There are many different environments!'))->id);
		$superMarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'Mario Underwater','description' => 'Mario using the frog suit powerup for better underwater control.'))->id);
		$superMarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'World-8 Map','description' => 'Mario on the final world map.'))->id);
    }

}