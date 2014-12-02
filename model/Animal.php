<?php
/**
 * Description of Animal
 *
 * @author richard.lovell
 */
class Animal implements AnimalInterface{

    /**
     * This is the constructor for the Aimal class. It will be called
     * when creating an Animal object ($animal = new Animal();) or 
     * on of its subtypes (Cat or Fish). 
     */
    function __construct() {
	echo "I am an animal!";
    }

    /**
     * All animals breathe. Some may in different ways. We can
     * represent that in the subtypes.
     * @return string
     */
    public function breathe() {
	return "I breathe";
    }
    
    /**
     * All animals move. Some may in different ways. We can
     * represent that in the subtypes.
     * @return string
     */
    public function move() {
	return "I move!";
    }

}
