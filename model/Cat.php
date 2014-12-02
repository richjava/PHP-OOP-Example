<?php

/**
 * Description of Cat
 *
 * @author richard.lovell
 */

class Cat extends Animal{

    /**
     * This is the constructor for the Cat class. It will be called
     * when creating a Cat object ($cat = new Cat();) and 
     * calls the constructor of its superclass (Animal).
     */
    function __construct() {
	echo "I am a cat!";
	parent::__construct();
	
    }

    /**
     * This is a polymorphic function. It overrides the breathe() method
     * in the superclass (Animal) and is implemented differently 
     * depending on the subtype. Notice that in this case it implements
     * the functionality of the Animal class's breathe() method and then
     * adds some more custom functionality relevant to a cat.
     * @return string
     */
    public function breathe() {
	return  parent::breathe()." through my lungs!";
    }

    //The move() method is not implemented here because a cat doesn't       //any differently than in its superclass's move() method. 
}
