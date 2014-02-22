<?php

class GameController extends BaseController {

	public function showNes($id){
		$game = NesGame::find($id);
		$genres = $game->genres()->get()->sortBy('name');
		$ratings = $game->ratings()->get()->sortBy('name');
		$screenshots = $game->screenshots()->get();
		$genies = $game->genies()->get();
		return View::make("game.nes")->with('game',$game)->with('genres',$genres)->with('ratings',$ratings)->with('screenshots',$screenshots)->with('genies',$genies);
	}

}