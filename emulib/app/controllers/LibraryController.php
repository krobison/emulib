<?php

class LibraryController extends BaseController {

	public function showNes(){
		$nesgames = NesGame::all();
		return View::make("library.nes")->with('games',$nesgames);
	}

}