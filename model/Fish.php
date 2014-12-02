<?php

/**
 * Description of Fish
 *
 * @author richard.lovell
 */

class Fish extends Animal{

    /**
     * This is the constructor for the Fish class. It will be called
     * when creating an Fish object ($fish = new Fish();) and calls
     * the constructor of its superclass (Animal).
     */
    function __construct() {
	echo "I am a fish!";
	parent::__construct();	
    }

    /**
     * This is a polymorphic function. It overrides the breathe() method
     * in the superclass (Animal) and is implemented differently 
     * depending on the subtype. Notice that in this case it implements
     * the functionality of the Animal class's breathe() method and then
     * adds some more custom functionality relevant to a fish.
     * @return string
     */
    public function breathe() {
	return parent::breathe()." through my gills!";
    }
    
    /**
     * This method is overriding the move() method, specifying totally
     * different functionality from the superclass's move() method.
     * @return string
     */
    public function move() {
	return "I swim!";
    }

}
