<?php

class GameController extends BaseController {

	public function showNes($id){
		$game = NesGame::find($id);
		return View::make("game.nes")->with('game',$game);
	}

}