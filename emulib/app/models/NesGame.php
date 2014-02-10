<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class NesGame extends Eloquent {

	public function genres(){
        return $this->belongsToMany('Genre');
    }
	
	public function ratings(){
        return $this->belongsToMany('Rating');
    }
	
	public function screenshots(){
        return $this->belongsToMany('Screenshot');
    }
	
}