<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Genie extends Eloquent {

	public function nes_games(){
        return $this->belongsToMany('NesGame');
    }
	
}