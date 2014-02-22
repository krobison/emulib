<?php

class LibraryController extends BaseController {

	public function showNes(){
		$nesgames = NesGame::all()->sortBy('name');
		return View::make("library.nes")->with('games',$nesgames);
	}

}