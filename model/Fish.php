<?php

/**
 * Description of Dog
 *
 * @author richard.lovell
 */

class Fish extends Animal{

    function __construct() {
	echo "I am a fish!";
	parent::__construct();	
    }

    public function breathe() {
	return parent::breathe()." through my gills!";
    }
    
    public function move() {
	return "I swim!";
    }

}
