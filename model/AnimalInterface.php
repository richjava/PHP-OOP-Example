<?php
/**
 * Interface for animals. This is a blueprint, or contract, that 
 * determines the behaviour that all the classes that implement it
 * must have, i.e. Animal classes must implement the breathe() and 
 * move() methods.
 * @author richard.lovell
 */

interface AnimalInterface {
    
    public function breathe();
    public function move();
}
