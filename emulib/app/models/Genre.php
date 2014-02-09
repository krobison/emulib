<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Genre extends Eloquent {

	public function nes_games(){
        return $this->belongsToMany('NesGame');
    }
	
}