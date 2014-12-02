<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP OOP Example</title>
    </head>
    <body>
	<?php
	final class Index {

	    public function init() {
		spl_autoload_register(array($this, 'loadClass'));
	    }

	    public function loadClass($name) {
		$classes = array(
		    'AnimalInterface' => 'model/AnimalInterface.php',
		    'Animal' => 'model/Animal.php',
		    'Cat' => 'model/Cat.php',
		    'Fish' => 'model/Fish.php'		    
		);
		if (!array_key_exists($name, $classes)) {
		    die('Class "' . $name . '" not found.');
		}
		require_once $classes[$name];
	    }

	    public function run() {
		$cat = new Cat();
		//breathe() is a polymorphic method, so we can use the 
		//respirate($animal)method instead of the following line 
		//echo "<br/>".$cat->breathe()."<br/>";
		self::respirate($cat);
		echo $cat->move()."<br/>";
						
		$fish = new Fish();
		//breathe() is a polymorphic method, so we can use the 
		//respirate($animal)method instead of the following line
		//echo "<br/>".$fish->breathe()."<br/>";
		self::respirate($fish);
		echo $fish->move()."<br/>";
	    }
	 
	    /**
	     * This function makes use of polymorphism. Both subtypes of 
	     * Animal implement breathe(), so either can be passed in.
	     * @param type $animal
	     */
	    private function respirate($animal){
		echo $animal->breathe()."<br/>";
	    }
	}

	$index = new Index();
	$index->init();	
	$index->run();
	?>
    </body>
</html>
