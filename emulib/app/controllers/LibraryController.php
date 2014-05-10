<?php

class LibraryController extends BaseController {

	public function showNes($show = "list",$order = "name"){
		$nesgames = NesGame::all()->sortBy($order);
		$genres = Genre::all()->sortBy($order);
		$search_genre = array("All"); 
		return View::make("library.nes")->with('games',$nesgames)->with('genres',$genres)->with('lib_nes',true)->with('view',$show)->with('search_genre',$search_genre);
	}
	
	public function showNesFilter($show = "list"){
		$nesgames = NesGame::all()->sortBy('name');
		$genres = Genre::all()->sortBy('name');	

		$input = Input::all();
		$search_genre = [];
		$search_genre_id;
		foreach ($input as $key => $value){
			if (strstr($key,"genre_") && $value == "on"){
				$genrename = substr($key,6);
				$genrename = str_replace("_"," ",$genrename);
				array_push($search_genre,$genrename);
				
			}
		}
		
		
		if (sizeof($search_genre) > 0){
			$nesgames = DB::table('nes_games')->leftJoin('genre_nes_game', 'nes_games.id', '=', 'genre_nes_game.nes_game_id')->whereIn('genre_nes_game.genre_id', $search_genre);
		}else{
			$search_genre = array("All"); 
		}
		

		return View::make("library.nes")->with('games',$nesgames)->with('genres',$genres)->with('lib_nes',true)->with('view',$show)->with('search_genre',$search_genre);
	}
	
	public function browse(){
		return View::make("library.browse");
	}

}