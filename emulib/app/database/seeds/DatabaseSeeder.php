<?php

class DatabaseSeeder extends Seeder {

	public function run(){
		Eloquent::unguard();

		$this->call('NesSeeder');
	}

}

class NesSeeder extends Seeder {

    public function run(){
	
		DB::table('genres')->delete();
		
		$g_action = Genre::create(array(
			'name' => 'Action'
		));	
		$g_adventure = Genre::create(array(
			'name' => 'Adventure'
		));	
		$g_americanfootball = Genre::create(array(
			'name' => 'American Football'
		));	
		$g_combatflightsimulator = Genre::create(array(
			'name' => 'Combat Flight Simulator'
		));	
		$g_horizontalscrollingshooter = Genre::create(array(
			'name' => 'Horizontal Scrolling Shooter'
		));
		$g_platformer = Genre::create(array(
			'name' => 'Platformer'
		));
		$g_railshooter = Genre::create(array(
			'name' => 'Rail Shooter'
		));
		$g_roleplayinggame = Genre::create(array(
			'name' => 'Role Playing Game'
		));
		$g_skateboarding = Genre::create(array(
			'name' => 'Skateboarding'
		));
		$g_sports = Genre::create(array(
			'name' => 'Sports'
		));
		$g_thirdpersonshooter = Genre::create(array(
			'name' => 'Third-Person Shooter'
		));
		$g_verticalscrollingshooter = Genre::create(array(
			'name' => 'Vertical Scrolling Shooter'
		));	
		
		
		DB::table('genre_nes_game')->delete();
		DB::table('genie_nes_game')->delete();
		DB::table('nes_game_rating')->delete();
		DB::table('nes_game_screenshot')->delete();
	
		DB::table('nes_games')->delete();
	
	
		$_10yardfight = NesGame::create(array(
			'name' => '10-Yard Fight',
			'filename' => '10yardfight',
			'boxart' => true,
			'description' => 'This game needs a description.'
		));
		$_10yardfight->genres()->attach($g_sports->id);
		$_10yardfight->genres()->attach($g_americanfootball->id);
		
		$_1942 = NesGame::create(array(
			'name' => '1942',
			'filename' => '1942',
			'boxart' => true,
			'description' => 'This game needs a description.'
		));
		$_1942->genres()->attach($g_verticalscrollingshooter->id);
		
		$_1943 = NesGame::create(array(
			'name' => '1943: The Battle of Midway',
			'filename' => '1943',
			'boxart' => true,
			'description' => 'This game needs a description.'
		));
		$_1943->genres()->attach($g_verticalscrollingshooter->id);
		
		$_3dworldrunner = NesGame::create(array(
			'name' => '3-D WorldRunner',
			'filename' => '3dworldrunner',
			'boxart' => true,
			'description' => 'This game needs a description.'
		));
		$_3dworldrunner->genres()->attach($g_thirdpersonshooter->id);
		$_3dworldrunner->genres()->attach($g_railshooter->id);
		
		$_720 = NesGame::create(array(
			'name' => '720°',
			'filename' => '720',
			'boxart' => true,
			'description' => 'This game needs a description.'
		));
		$_720->genres()->attach($g_skateboarding->id);
		$_720->genres()->attach($g_sports->id);
		
		$_8eyes = NesGame::create(array(
			'name' => '8 Eye\'s',
			'filename' => '8eyes',
			'boxart' => true,
			'description' => 'This game needs a description.'
		));
		$_8eyes->genres()->attach($g_action->id);
		$_8eyes->genres()->attach($g_platformer->id);

		$_abadox = NesGame::create(array(
			'name' => 'Abadox',
			'filename' => 'abadox',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_abadox->genres()->attach($g_verticalscrollingshooter->id);
		
		$_anightmareonelmstreet = NesGame::create(array(
			'name' => 'A Nightmare on Elm Street',
			'filename' => 'anightmareonelmstreet',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_anightmareonelmstreet->genres()->attach($g_platformer->id);
		
		$_theaddamsfamily = NesGame::create(array(
			'name' => 'The Addams Family',
			'filename' => 'theaddamsfamily',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theaddamsfamily->genres()->attach($g_platformer->id);
		
		$_theaddamsfamilypugsleysscavengerhunt = NesGame::create(array(
			'name' => 'The Addams Family: Pugsley\'s Scavenger Hunt',
			'filename' => 'theaddamsfamilypugsleysscavengerhunt',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theaddamsfamilypugsleysscavengerhunt->genres()->attach($g_platformer->id);
		
		$_advanceddungeonsanddragonsdragonsofflame = NesGame::create(array(
			'name' => 'Advanced Dungeons & Dragons: Dragons of Flame',
			'filename' => 'advanceddungeonsanddragonsdragonsofflame',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_advanceddungeonsanddragonsdragonsofflame->genres()->attach($g_roleplayinggame->id);
		$_advanceddungeonsanddragonsdragonsofflame->genres()->attach($g_adventure->id);
		
		$_advanceddungeonsanddragonsdragonstrike = NesGame::create(array(
			'name' => 'Advanced Dungeons & Dragons: Dragonstrike',
			'filename' => 'advanceddungeonsanddragonsdragonstrike',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_advanceddungeonsanddragonsdragonstrike->genres()->attach($g_combatflightsimulator->id);
		
		$_advanceddungeonsanddragonsheroesofthelance = NesGame::create(array(
			'name' => 'Advanced Dungeons & Dragons: Heroes of the Lance',
			'filename' => 'advanceddungeonsanddragonsheroesofthelance',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_advanceddungeonsanddragonsheroesofthelance->genres()->attach($g_roleplayinggame->id);
		$_advanceddungeonsanddragonsheroesofthelance->genres()->attach($g_adventure->id);
		
		$_advanceddungeonsanddragonshillsfar = NesGame::create(array(
			'name' => 'Advanced Dungeons & Dragons: Hillsfar',
			'filename' => 'advanceddungeonsanddragonshillsfar',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_advanceddungeonsanddragonshillsfar->genres()->attach($g_roleplayinggame->id);
		$_advanceddungeonsanddragonshillsfar->genres()->attach($g_adventure->id);
		
		
		$_advanceddungeonsanddragonspoolofradiance = NesGame::create(array(
			'name' => 'Advanced Dungeons & Dragons: Pool of Radiance',
			'filename' => 'advanceddungeonsanddragonspoolofradiance',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_advanceddungeonsanddragonspoolofradiance->genres()->attach($g_roleplayinggame->id);
		$_advanceddungeonsanddragonspoolofradiance->genres()->attach($g_adventure->id);
		
		$_adventureisland = NesGame::create(array(
			'name' => 'Adventure Island',
			'filename' => 'adventureisland',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_adventureisland2 = NesGame::create(array(
			'name' => 'Adventure Island II',
			'filename' => 'adventureisland2',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_adventureisland3 = NesGame::create(array(
			'name' => 'Adventure Island 3',
			'filename' => 'adventureisland3',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_adventuresinthemagickingdom = NesGame::create(array(
			'name' => 'Adventures in the Magic Kingdom',
			'filename' => 'adventuresinthemagickingdom',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theadventuresofbayoubilly = NesGame::create(array(
			'name' => 'The Adventures of Bayou Billy',
			'filename' => 'theadventuresofbayoubilly',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theadventuresofdinoriki = NesGame::create(array(
			'name' => 'The Adventures of Dino Riki',
			'filename' => 'theadventuresofdinoriki',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theadventuresofgilligansisland = NesGame::create(array(
			'name' => 'The Adventures of Gilligan\'s Island',
			'filename' => 'theadventuresofgilligansisland',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_adventuresoflolo = NesGame::create(array(
			'name' => 'Adventures of Lolo',
			'filename' => 'adventuresoflolo',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_adventuresoflolo2 = NesGame::create(array(
			'name' => 'Adventures of Lolo 2',
			'filename' => 'adventuresoflolo2',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_adventuresoflolo3 = NesGame::create(array(
			'name' => 'Adventures of Lolo 3',
			'filename' => 'adventuresoflolo3',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theadventuresofradgravity = NesGame::create(array(
			'name' => 'The Adventures of Rad Gravity',
			'filename' => 'theadventuresofradgravity',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theadventuresofrockyandbullwinkleandfriends = NesGame::create(array(
			'name' => 'The Adventures of Rocky & Bullwinkle and Friends',
			'filename' => 'theadventuresofrockyandbullwinkleandfriends',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theadventuresoftomsawyer = NesGame::create(array(
			'name' => 'The Adventures of Tom Sawyer',
			'filename' => 'theadventuresoftomsawyer',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_airfortress = NesGame::create(array(
			'name' => 'Air Fortress',
			'filename' => 'airfortress',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_airwolf = NesGame::create(array(
			'name' => 'Airwolf',
			'filename' => 'airwolf',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_alunserjrsturboracing = NesGame::create(array(
			'name' => 'Al Unser Jr.\'s Turbo Racing',
			'filename' => 'alunserjrsturboracing',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_alfredchicken = NesGame::create(array(
			'name' => 'Alfred Chicken',
			'filename' => 'alfredchicken',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_aliensyndrome = NesGame::create(array(
			'name' => 'Alien Syndrome',
			'filename' => 'aliensyndrome',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_alien3 = NesGame::create(array(
			'name' => 'Alien3',
			'filename' => 'alien3',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_allprobasketball = NesGame::create(array(
			'name' => 'All-Pro Basketball',
			'filename' => 'allprobasketball',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_alphamission = NesGame::create(array(
			'name' => 'Alpha Mission',
			'filename' => 'alphamission',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_amagon = NesGame::create(array(
			'name' => 'Amagon',
			'filename' => 'amagon',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_americangladiators = NesGame::create(array(
			'name' => 'American Gladiators',
			'filename' => 'americangladiators',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_anticipation = NesGame::create(array(
			'name' => 'Anticipation',
			'filename' => 'anticipation',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_archrivals = NesGame::create(array(
			'name' => 'Arch Rivals',
			'filename' => 'archrivals',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_archon = NesGame::create(array(
			'name' => 'Archon',
			'filename' => 'archon',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_arkanoid = NesGame::create(array(
			'name' => 'Arkanoid',
			'filename' => 'arkanoid',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_arkistasring = NesGame::create(array(
			'name' => 'Arkista\'s Ring',
			'filename' => 'arkistasring',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_asterix = NesGame::create(array(
			'name' => 'Asterix',
			'filename' => 'asterix',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_astyanax = NesGame::create(array(
			'name' => 'Astyanax',
			'filename' => 'astyanax',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_athena = NesGame::create(array(
			'name' => 'Athena',
			'filename' => 'athena',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_athleticworld = NesGame::create(array(
			'name' => 'Athletic World',
			'filename' => 'athleticworld',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_attackofthekillertomatoes = NesGame::create(array(
			'name' => 'Attack of the Killer Tomatoes',
			'filename' => 'attackofthekillertomatoes',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_aussierulesfooty = NesGame::create(array(
			'name' => 'Aussie Rules Footy',
			'filename' => 'aussierulesfooty',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_backtothefuture = NesGame::create(array(
			'name' => 'Back to the Future',
			'filename' => 'backtothefuture',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_backtothefuturepart2and3 = NesGame::create(array(
			'name' => 'Back to the Future Part II & III',
			'filename' => 'backtothefuturepart2and3',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_baddudesvsdragonninja = NesGame::create(array(
			'name' => 'Bad Dudes (Vs. DragonNinja)',
			'filename' => 'baddudesvsdragonninja',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_badnewsbaseball = NesGame::create(array(
			'name' => 'Bad News Baseball',
			'filename' => 'badnewsbaseball',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_badstreetbrawler = NesGame::create(array(
			'name' => 'Bad Street Brawler',
			'filename' => 'badstreetbrawler',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_balloonfight = NesGame::create(array(
			'name' => 'Balloon Fight',
			'filename' => 'balloonfight',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bananaprince = NesGame::create(array(
			'name' => 'Banana Prince',
			'filename' => 'bananaprince',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_bandaigolfchallengepebblebeach = NesGame::create(array(
			'name' => 'Bandai Golf: Challenge Pebble Beach',
			'filename' => 'bandaigolfchallengepebblebeach',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_banditkingsofancientchina = NesGame::create(array(
			'name' => 'Bandit Kings of Ancient China',
			'filename' => 'banditkingsofancientchina',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_barbie = NesGame::create(array(
			'name' => 'Barbie',
			'filename' => 'barbie',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_thebardstale = NesGame::create(array(
			'name' => 'The Bard\'s Tale',
			'filename' => 'thebardstale',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_barkerbillstrickshooting = NesGame::create(array(
			'name' => 'Barker Bill\'s Trick Shooting',
			'filename' => 'barkerbillstrickshooting',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_basewars = NesGame::create(array(
			'name' => 'Base Wars',
			'filename' => 'basewars',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_baseball = NesGame::create(array(
			'name' => 'Baseball',
			'filename' => 'baseball',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_baseballsimulator1000 = NesGame::create(array(
			'name' => 'Baseball Simulator 1.000',
			'filename' => 'baseballsimulator1000',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_baseballstars = NesGame::create(array(
			'name' => 'Baseball Stars',
			'filename' => 'baseballstars',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_baseballstars2 = NesGame::create(array(
			'name' => 'Baseball Stars II',
			'filename' => 'baseballstars2',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_basesloaded = NesGame::create(array(
			'name' => 'Bases Loaded',
			'filename' => 'basesloaded',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_basesloaded2secondseason = NesGame::create(array(
			'name' => 'Bases Loaded II: Second Season',
			'filename' => 'basesloaded2secondseason',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_basesloaded3 = NesGame::create(array(
			'name' => 'Bases Loaded 3',
			'filename' => 'basesloaded3',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_basesloaded4 = NesGame::create(array(
			'name' => 'Bases Loaded 4',
			'filename' => 'basesloaded4',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_batman = NesGame::create(array(
			'name' => 'Batman',
			'filename' => 'batman',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_batmanreturns = NesGame::create(array(
			'name' => 'Batman Returns',
			'filename' => 'batmanreturns',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_batmanreturnofthejoker = NesGame::create(array(
			'name' => 'Batman: Return of the Joker',
			'filename' => 'batmanreturnofthejoker',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_battlechess = NesGame::create(array(
			'name' => 'Battle Chess',
			'filename' => 'battlechess',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_thebattleofolympus = NesGame::create(array(
			'name' => 'The Battle of Olympus',
			'filename' => 'thebattleofolympus',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_battletank = NesGame::create(array(
			'name' => 'Battle Tank',
			'filename' => 'battletank',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_battleship = NesGame::create(array(
			'name' => 'Battleship',
			'filename' => 'battleship',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_battletoads = NesGame::create(array(
			'name' => 'Battletoads',
			'filename' => 'battletoads',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_battletoadsanddoubledragon = NesGame::create(array(
			'name' => 'Battletoads & Double Dragon',
			'filename' => 'battletoadsanddoubledragon',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_beetlejuice = NesGame::create(array(
			'name' => 'Beetlejuice',
			'filename' => 'beetlejuice',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bestofthebestchampionshipkarate = NesGame::create(array(
			'name' => 'Best of the Best: Championship Karate',
			'filename' => 'bestofthebestchampionshipkarate',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bigfoot = NesGame::create(array(
			'name' => 'Bigfoot',
			'filename' => 'bigfoot',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bibleadventures = NesGame::create(array(
			'name' => 'Bible Adventures',
			'filename' => 'bibleadventures',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_billandtedsexcellentvideogameadventure = NesGame::create(array(
			'name' => 'Bill & Ted\'s Excellent Video Game Adventure',
			'filename' => 'billandtedsexcellentvideogameadventure',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_billelliotsnascarchallenge = NesGame::create(array(
			'name' => 'Bill Elliot\'s NASCAR Challenge',
			'filename' => 'billelliotsnascarchallenge',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bioniccommando = NesGame::create(array(
			'name' => 'Bionic Commando',
			'filename' => 'bioniccommando',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_theblackbass = NesGame::create(array(
			'name' => 'The Black Bass',
			'filename' => 'theblackbass',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bladesofsteel = NesGame::create(array(
			'name' => 'Blades of Steel',
			'filename' => 'bladesofsteel',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_blastermaster = NesGame::create(array(
			'name' => 'Blaster Master',
			'filename' => 'blastermaster',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_thebluemarlin = NesGame::create(array(
			'name' => 'The Blue Marlin',
			'filename' => 'thebluemarlin',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_thebluesbrothers = NesGame::create(array(
			'name' => 'The Blues Brothers',
			'filename' => 'thebluesbrothers',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bojacksonbaseball = NesGame::create(array(
			'name' => 'Bo Jackson Baseball',
			'filename' => 'bojacksonbaseball',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_bomberman = NesGame::create(array(
			'name' => 'Bomberman',
			'filename' => 'bomberman',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bomberman2 = NesGame::create(array(
			'name' => 'Bomberman II',
			'filename' => 'bomberman2',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bonksadventure = NesGame::create(array(
			'name' => 'Bonk\'s Adventure',
			'filename' => 'bonksadventure',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_boulderdash = NesGame::create(array(
			'name' => 'Boulder Dash',
			'filename' => 'boulderdash',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_aboyandhisblobtroubleonblobolonia = NesGame::create(array(
			'name' => 'A Boy and His Blob: Trouble on Blobolonia',
			'filename' => 'aboyandhisblobtroubleonblobolonia',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bramstokersdracula = NesGame::create(array(
			'name' => 'Bram Stoker\'s Dracula',
			'filename' => 'bramstokersdracula',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_breaktimethenationalpooltour = NesGame::create(array(
			'name' => 'Break Time: The National Pool Tour',
			'filename' => 'breaktimethenationalpooltour',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_breakthru = NesGame::create(array(
			'name' => 'BreakThru',
			'filename' => 'breakthru',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bubblebobble = NesGame::create(array(
			'name' => 'Bubble Bobble',
			'filename' => 'bubblebobble',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bubblebobblepart2 = NesGame::create(array(
			'name' => 'Bubble Bobble Part 2',
			'filename' => 'bubblebobblepart2',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_buckyohare = NesGame::create(array(
			'name' => 'Bucky O\'Hare',
			'filename' => 'buckyohare',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_thebugsbunnybirthdayblowout = NesGame::create(array(
			'name' => 'The Bugs Bunny Birthday Blowout',
			'filename' => 'thebugsbunnybirthdayblowout',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_thebugsbunnycrazycastle= NesGame::create(array(
			'name' => 'The Bugs Bunny Crazy Castle',
			'filename' => 'thebugsbunnycrazycastle',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_bumpnjump = NesGame::create(array(
			'name' => 'Bump \'n\' Jump',
			'filename' => 'bumpnjump',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_buraifighter = NesGame::create(array(
			'name' => 'Burai Fighter',
			'filename' => 'buraifighter',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_burgertime = NesGame::create(array(
			'name' => 'BurgerTime',
			'filename' => 'burgertime',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cabal = NesGame::create(array(
			'name' => 'Cabal',
			'filename' => 'cabal',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_caesarspalace = NesGame::create(array(
			'name' => 'Caesars Palace',
			'filename' => 'caesarspalace',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_californiagames = NesGame::create(array(
			'name' => 'California Games',
			'filename' => 'californiagames',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_capcomsgoldmedalchallenge92 = NesGame::create(array(
			'name' => 'Capcom\'s Gold Medal Challenge \'92',
			'filename' => 'capcomsgoldmedalchallenge92',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_captainamericaandtheavengers = NesGame::create(array(
			'name' => 'Captain America and The Avengers',
			'filename' => 'captainamericaandtheavengers',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_captaincomic = NesGame::create(array(
			'name' => 'Captain Comic',
			'filename' => 'captaincomic',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_captainplanet = NesGame::create(array(
			'name' => 'Captain Planet',
			'filename' => 'captainplanet',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_captainskyhawk = NesGame::create(array(
			'name' => 'Captain Skyhawk',
			'filename' => 'captainskyhawk',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_casinokid = NesGame::create(array(
			'name' => 'Casino Kid',
			'filename' => 'casinokid',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_casinokid2 = NesGame::create(array(
			'name' => 'Casino Kid 2',
			'filename' => 'casinokid2',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_castelian = NesGame::create(array(
			'name' => 'Castelian',
			'filename' => 'castelian',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_castleofdragon = NesGame::create(array(
			'name' => 'Castle of Dragon',
			'filename' => 'castleofdragon',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_castlequest = NesGame::create(array(
			'name' => 'Castlequest',
			'filename' => 'castlequest',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_castlevania = NesGame::create(array(
			'name' => 'Castlevania',
			'filename' => 'castlevania',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_castlevania2simonsquest = NesGame::create(array(
			'name' => 'Castlevania II: Simon\'s Quest',
			'filename' => 'castlevania2simonsquest',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_castlevania3draculascurse = NesGame::create(array(
			'name' => 'Castlevania III: Dracula\'s Curse',
			'filename' => 'castlevania3draculascurse',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cavemangames = NesGame::create(array(
			'name' => 'Caveman Games',
			'filename' => 'cavemangames',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_championshipbowling = NesGame::create(array(
			'name' => 'Championship Bowling',
			'filename' => 'championshipbowling',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_championshippool = NesGame::create(array(
			'name' => 'Championship Pool',
			'filename' => 'championshippool',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_championshiprally = NesGame::create(array(
			'name' => 'Championship Rally',
			'filename' => 'championshiprally',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_thechessmaster = NesGame::create(array(
			'name' => 'The Chessmaster',
			'filename' => 'thechessmaster',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_chiller = NesGame::create(array(
			'name' => 'Chiller',
			'filename' => 'chiller',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_chipndalerescuerangers = NesGame::create(array(
			'name' => 'Chip \'n Dale: Rescue Rangers',
			'filename' => 'chipndalerescuerangers',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_chipndalerescuerangers2 = NesGame::create(array(
			'name' => 'Chip \'n Dale: Rescue Rangers 2',
			'filename' => 'chipndalerescuerangers2',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_chubbycherub = NesGame::create(array(
			'name' => 'Chubby Cherub',
			'filename' => 'chubbycherub',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_circuscaper = NesGame::create(array(
			'name' => 'Circus Caper',
			'filename' => 'circuscaper',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cityconnection = NesGame::create(array(
			'name' => 'City Connection',
			'filename' => 'cityconnection',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_clashatdemonhead = NesGame::create(array(
			'name' => 'Clash at Demonhead',
			'filename' => 'clashatdemonhead',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_classicconcentration = NesGame::create(array(
			'name' => 'Classic Concentration',
			'filename' => 'classicconcentration',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cliffhanger = NesGame::create(array(
			'name' => 'Cliffhanger',
			'filename' => 'cliffhanger',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_clucluland = NesGame::create(array(
			'name' => 'Clu Clu Land',
			'filename' => 'clucluland',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cobracommand = NesGame::create(array(
			'name' => 'Cobra Command',
			'filename' => 'cobracommand',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cobratriangle = NesGame::create(array(
			'name' => 'Cobra Triangle',
			'filename' => 'cobratriangle',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_codenameviper = NesGame::create(array(
			'name' => 'Code Name: Viper',
			'filename' => 'codenameviper',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_coloradinosaur = NesGame::create(array(
			'name' => 'Color a Dinosaur',
			'filename' => 'coloradinosaur',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_commando = NesGame::create(array(
			'name' => 'Commando',
			'filename' => 'commando',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_conanthemysteriesoftime = NesGame::create(array(
			'name' => 'Conan: The Mysteries of Time',
			'filename' => 'conanthemysteriesoftime',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_conflict = NesGame::create(array(
			'name' => 'Conflict',
			'filename' => 'conflict',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_conquestofthecrystalpalace = NesGame::create(array(
			'name' => 'Conquest of the Crystal Palace',
			'filename' => 'conquestofthecrystalpalace',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_contra = NesGame::create(array(
			'name' => 'Contra',
			'filename' => 'contra',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_contraforce = NesGame::create(array(
			'name' => 'Contra Force',
			'filename' => 'contraforce',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_coolworld = NesGame::create(array(
			'name' => 'Cool World',
			'filename' => 'coolworld',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cowboykid = NesGame::create(array(
			'name' => 'Cowboy Kid',
			'filename' => 'cowboykid',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_crackout = NesGame::create(array(
			'name' => 'Crackout',
			'filename' => 'crackout',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_crashntheboysstreetchallenge = NesGame::create(array(
			'name' => 'Crash \'n the Boys: Street Challenge',
			'filename' => 'crashntheboysstreetchallenge',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_crisisforce = NesGame::create(array(
			'name' => 'Crisis Force',
			'filename' => 'crisisforce',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_crystalis = NesGame::create(array(
			'name' => 'Crystalis',
			'filename' => 'crystalis',
			'boxart' => true,
			'description' => 'This game needs a description'
		));
		$_cyberball = NesGame::create(array(
			'name' => 'Cyberball',
			'filename' => 'cyberball',
			'boxart' => false,
			'description' => 'This game needs a description'
		));
		$_cybernoidthefightingmachine = NesGame::create(array(
			'name' => 'Cybernoid: The Fighting Machine',
			'filename' => 'cybernoidthefightingmachine',
			'boxart' => true,
			'description' => 'This game needs a description'
		));




	
		//============================================================================================================================
		$_supermarioBros3 = NesGame::create(array(
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
		$_supermarioBros3->genres()->attach($g_platformer->id);
		$_supermarioBros3->ratings()->attach(Rating::create(array('name' => 'Allgame','rating' => '&#9733;&#9733;&#9733;&#9733;&#9733;','class' => 'goodRating'))->id);
		$_supermarioBros3->ratings()->attach(Rating::create(array('name' => 'Gamespot','rating' => '9.0/10','class' => 'goodRating'))->id);
		$_supermarioBros3->ratings()->attach(Rating::create(array('name' => 'IGN','rating' => '9.5/10','class' => 'goodRating'))->id);
		$_supermarioBros3->ratings()->attach(Rating::create(array('name' => 'The Video Game Critic','rating' => 'A+','class' => 'goodRating'))->id);
		$_supermarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'On An Airship','description' => 'Bullets everywhere!'))->id);
		$_supermarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'In A Desert Level','description' => 'There are many different environments!'))->id);
		$_supermarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'Mario Underwater','description' => 'Mario using the frog suit powerup for better underwater control.'))->id);
		$_supermarioBros3->screenshots()->attach(Screenshot::create(array('name' => 'World-8 Map','description' => 'Mario on the final world map.'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => NULL,'description' => 'All codes (except as noted) work for Luigi as well as Mario.','twoColumn' => true))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'SLXPLOVS','description' => 'Infinite lives for Mario and Luigi'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEKPTZGA','description' => '1 life for Mario and Luigi after continue'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEKPTZGE','description' => '9 lives for Mario and Luigi after continue'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'ELKZYVEK','description' => 'Power Jumps'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'EZKZYVEK','description' => 'Super Power Jumps'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'EAKZYVEK','description' => 'Mega Power Jumps'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'GZUXNGEI','description' => 'Multi-Jumps'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => NULL,'description' => 'With the next code, if you let Mario or Luigi drop too long, you can\'t sky walk until you touch the ground again','twoColumn' => true))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'SXEZSKOZ','description' => 'Skywalker'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'SXEZSKOX','description' => 'Skywalker (alt)'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'OXKZELSX','description' => 'Super speed running'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'XVUXNUEE','description' => 'Turbocharged running'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => NULL,'description' => 'You must be Raccoon Mario for the next code to work','twoColumn' => true))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AANZKLLA','description' => 'Can raise power meter while standing still so that you can fly from a standing start'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'PEUZUGAA','description' => 'Start on World 2'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'ZEUZUGAA','description' => 'Start on World 3'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'LEUZUGAA','description' => 'Start on World 4'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'GEUZUGAA','description' => 'Start on World 5'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'IEUZUGAA','description' => 'Start on World 6'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'TEUZUGAA','description' => 'Start on World 7'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'YEUZUGAA','description' => 'Start on World 8'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'YPXXLVGE','description' => 'Mario (not Luigi) can re-use items again and again'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'SZUEXNSO','description' => 'Restore powers after playing an action scene (e.g. if you were "Fire Mario" on the map screen, then entered an action scene, died or changed to "Frog Mario,"you would return to the map scene as "Fire Mario")'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'ZEUXKGAA','description' => 'Start the game as Fire Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'LEUXKGAA','description' => 'Start the game as Raccoon Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'GEUXKGAA','description' => 'Start the game as Frog Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'IEUXKGAA','description' => 'Start the game as Tanooki Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'TEUXKGAA','description' => 'Start the game as \'Sledgehammer\' Mario!'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => NULL,'description' => 'If you use any of the next five codes to defeat Bowser, stand in front of the door and hold "Up". as soon as the door opens, you will pass through into the chamber where the Princess is held. If you don\'t do this, you may get caught in Bowser\'s time trap and the game will pause forever!','twoColumn' => true))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'XUKXGLIE','description' => 'Start and stay as Super Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'UXKXGLIA','description' => 'Start and stay as Fire Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'NXKXGLIE','description' => 'Start and stay as Raccoon Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'OUKXGLIE','description' => 'Start and stay as Frog Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'XNKXGLIE','description' => 'Start and stay as Sledgehammer Mario'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'SZKIKXSE','description' => 'Invincibility after changing up from Super Mario (e.g. to Raccoon, Frog, etc.)'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => NULL,'description' => 'With all of the following codes, you will find that you change into Super Mario if you die again:','twoColumn' => true))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEOSSZPA + PAOZTGAA','description' => 'Change to Super Mario if you fall off screen and die'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEOSSZPA + ZAOZTGAA','description' => 'Change to Fire Mario if you fall off screen and die'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEOSSZPA + LAOZTGAA','description' => 'Change to Raccoon Mario if you fall off screen and die'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEOSSZPA + GAOZTGAA','description' => 'Change to Frog Mario if you fall off screen and die'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEOSSZPA + IAOZTGAA','description' => 'Change to Tanooki Mario if you fall off screen and die'))->id);
		$_supermarioBros3->genies()->attach(Genie::create(array('code' => 'AEOSSZPA + TAOZTGAA','description' => 'Change to Sledgehammer Mario if you fall off screen and die'))->id);
		//============================================================================================================================
		
		//============================================================================================================================
		$_supermarioBros2 = NesGame::create(array(
			'name' => 'Super Mario Bros. 2',
			'release_japan' => '1992-09-14',
			'release_pal' => '1989-04-14',
			'release_usa' => '1988-10-10',
			'players' => 2,
			'filename' => 'supermariobros2',
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
			'description' => 'Super Mario Bros. 2 is a 1988 platform game developed and published by Nintendo for the Nintendo Entertainment
			System as a sequel to the 1985 game Super Mario Bros. The game was first released in North America on October 10, 1988. Super Mario
			Bros. 2 has been remade or re-released for several video game consoles. <br><br>
			Super Mario Bros. 2 initially was proposed as a demo for a vertically scrolling, two-player, cooperative-action game that was scrapped.
			It was intended to be the sequel to Super Mario Bros. but also a radical departure from the previous Mario game, as at the time, the gameplay
			of the Mario series was not yet significantly standardised. The original Super Mario Bros. itself had already been a radically different sequel 
			to the original arcade game Mario Bros., and this new sequel was proposed as a mixture of the gameplay of both these two successful Mario games. The reasons 
			for the scrapping of the original prototype included the technical limitations of the NES hardware making it difficult to produce a polished game featuring a 
			vertical orientation and multiplayer features conceived for the project. It was decided to add more Mario-like elements, such as horizontal levels, though many 
			vertically oriented levels were retained in the final project.<br><br>
			After Nintendo of America had concluded that the Japanese Super Mario Bros.
			2 was too difficult, they chose instead to help the original development staff 
			to redevelop Yume Kōjō: Doki Doki Panic back into a Super Mario Bros. sequel. The game
			became a commercial success, and eventually the game became well received enough that it
			was also released in Japan for the Family Computer itself as Super Mario USA. Since its successful 
			sales yield, Super Mario Bros. 2 has been considered a classic Super Mario Bros. game worldwide, 
			including Japan.<br><br>'
		));	
		$_supermarioBros2->genres()->attach($g_platformer->id);
		$_supermarioBros2->ratings()->attach(Rating::create(array('name' => 'Allgame','rating' => '&#9733;&#9733;&#9733;&#9733;&#189;','class' => 'goodRating'))->id);
		$_supermarioBros2->ratings()->attach(Rating::create(array('name' => 'Gamespot','rating' => '8.0/10','class' => 'goodRating'))->id);
		$_supermarioBros2->ratings()->attach(Rating::create(array('name' => 'IGN','rating' => '8.5/10','class' => 'goodRating'))->id);
		$_supermarioBros2->ratings()->attach(Rating::create(array('name' => 'The Video Game Critic','rating' => 'A-','class' => 'goodRating'))->id);
		$_supermarioBros2->screenshots()->attach(Screenshot::create(array('name' => 'Brand New POW Block','description' => 'For those pesky enemies!'))->id);
		$_supermarioBros2->screenshots()->attach(Screenshot::create(array('name' => 'Play As Peach!','description' => 'There are several characters to choose from.'))->id);
		$_supermarioBros2->screenshots()->attach(Screenshot::create(array('name' => 'Fight some crazy egg-spitting guy!','description' => 'Seriously. It\'s a guy. Read the manual.'))->id);
		//============================================================================================================================
    }

}