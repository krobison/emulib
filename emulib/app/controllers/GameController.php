<?php

class GameController extends BaseController {

	public function showNes($id){
		$game = NesGame::find($id);
		$genres = $game->genres()->get();
		$ratings = $game->ratings()->get();
		$screenshots = $game->screenshots()->get();
		return View::make("game.nes")->with('game',$game)->with('genres',$genres)->with('ratings',$ratings)->with('screenshots',$screenshots);
	}

}