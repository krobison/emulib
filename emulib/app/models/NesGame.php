<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class NesGame extends Eloquent {

	public function genres(){
        return $this->belongsToMany('Genre');
    }
	
}