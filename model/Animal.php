<?php

class Animal implements AnimalInterface{

    function __construct() {
	echo "I am an animal!";
    }

    public function breathe() {
	return "I breathe";
    }
    
    public function move() {
	return "I move!";
    }

}
