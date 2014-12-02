<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cat
 *
 * @author richard.lovell
 */

class Cat extends Animal{

    function __construct() {
	echo "I am a cat!";
	parent::__construct();
	
    }

    /**
     * 
     * @return type
     */
    public function breathe() {
	return  parent::breathe()." through my lungs!";
    }

}
