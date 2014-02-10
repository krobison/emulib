<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Screenshot extends Eloquent {

	public function nes_games(){
        return $this->belongsToMany('NesGame');
    }
	
}