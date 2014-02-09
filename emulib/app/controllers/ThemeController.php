<?php

class ThemeController extends BaseController {

	public function invertNavbar(){
		Session::put('inverted','true');
		return Redirect::back();
	}
	public function uninvertNavbar(){
		Session::put('inverted','false');
		return Redirect::back();
	}
	
	public function changeTheme($theme){
		Session::put('theme',$theme);
		return Redirect::back();
	}

}