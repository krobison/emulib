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
		NesGame::create(array(
			'name' => 'Super Mario Bros. 3',
			'release_japan' => '1988-10-23',
			'release_pal' => '1991-08-29',
			'release_usa' => '1990-02-12',
			'players' => 2,
			'filename' => 'supermariobros3',
			'publisher' => 'Nintendo',
			'developer' => 'Nintendo R&D',
			'producer' => 'Shigeru Miyamoto',
			'series' => 'Super Mario',
			'acb' => 'acb_g.png',
			'cero' => 'cero_a.png',
			'esrb' => 'esrb_e.png',
			'pegi' => 'pegi_3.png',
			'description' => 'This is a game'
		));
    }

}